<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\About;
use App\Models\Attribute;
use App\Models\Attribute_option;
use App\Models\Blog;
use App\Models\Blogtag;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Faq;
use App\Models\Meta_tag;
use App\Models\News;
use App\Models\Newstag;
use App\Models\Photo;
use App\Models\Project;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\Socialicon;
use App\Models\SolutionCategory;
use App\Models\Store;
use App\Models\Team;
use App\Models\Vacancy;
use App\Models\Vendor;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $setting=Setting::firstOrFail();
        $sliderimages=Slider::where('type','image')->get();
        $slidervideo= Slider::where('type', 'video')->firstOrFail();
        $clients=Client::all();
        $customers = Client::orderByDesc('id')->get();
        $teams=Team::limit(3)->get();
        $vendors=Vendor::all();
        $metatag = Meta_tag::firstOrFail();
        $socialicons=Socialicon::all();
        $projects=Project::limit(4)->get();
        $solutioncategories=SolutionCategory::limit(4)->get();
        return view('front.home', compact('setting','projects','metatag', 'teams', 'vendors', 'clients', 'socialicons', 'customers', 'solutioncategories', 'sliderimages', 'slidervideo'));
    }
    public function about()
    {
        $about=About::firstOrFail();
        $metatag=Meta_tag::firstOrFail();
        return view('front.about',compact('metatag', 'about'));
    }
    public function faq()
    {
        $metatag = Meta_tag::firstOrFail();
        $faqs=Faq::all();
        return view('front.faq',compact('faqs', 'metatag'));
    }
    public function blogs($slug)
    {
        $metatag = Meta_tag::query()->firstOrFail();
        $locale = app()->getLocale();
        $tags = Blogtag::all();
        $tag = Blogtag::with('blogs')->where("slug", 'like', '%' . $slug . '%')->first();
        $blogs = $tag->blogs()->paginate(5);
        return view('front.blog', compact('blogs', 'tag', 'tags', 'metatag', 'locale'));
    }
    public function blog()
    {
        $tags=Blogtag::all();
        $blogs=Blog::orderByDesc('id')->get();
        $metatag = Meta_tag::firstOrFail();
        return view('front.blog', compact('metatag', 'blogs', 'tags'));
    }
    public function blogsearch(Request $request)
    {
        $title = $request->title;
        $tags = Blogtag::all();
        $blogs = Blog::where("title", 'like', '%' . $title . '%')->get();
        $metatag = Meta_tag::firstOrFail();
        return view('front.blog', compact('metatag', 'blogs', 'tags'));
    }
    public function blogDetails($id)
    {
        $blog=Blog::where('id',$id)->firstOrFail();
        $metatag = Meta_tag::firstOrFail();
        return view('front.blogDetails', compact('metatag', 'blog'));
    }
    public function photos()
    {
        $photos=Photo::all();
        $metatag = Meta_tag::firstOrFail();
        return view('front.photos', compact('metatag','photos'));
    }
    public function videos()
    {
        $videos=Video::all();
        $metatag = Meta_tag::firstOrFail();
        return view('front.videos', compact('metatag','videos'));
    }
    public function vacancy()
    {
        $metatag = Meta_tag::firstOrFail();
        $vacancies=Vacancy::all();
        return view('front.vacancy',compact('vacancies','metatag'));
    }
    public function vacancyDetail($id){
        $vacancy=Vacancy::where('id',$id)->firstOrFail();
        $metatag = Meta_tag::firstOrFail();
        return view('front.vacancydetail',compact('metatag', 'vacancy'));
    }
    public function newssearch(Request $request)
    {
        $title = $request->title;
        $tags = Newstag::all();
        $newss = News::where("title", 'like', '%' . $title . '%')->get();
        $metatag = Meta_tag::firstOrFail();
        return view('front.news', compact('metatag', 'newss', 'tags'));
    }
    public function newss($slug)
    {
        $metatag = Meta_tag::query()->firstOrFail();
        $locale = app()->getLocale();
        $tags = Newstag::all();
        $tag = Newstag::with('news')->where("slug", 'like', '%' . $slug . '%')->first();
        $newss = $tag->news()->paginate(5);
        return view('front.news', compact('newss', 'tag', 'tags', 'metatag', 'locale'));
    }
    public function news()
    {

        $tags = Newstag::all();
        $newss = News::orderByDesc('id')->get();
        $metatag = Meta_tag::firstOrFail();
        return view('front.news', compact('metatag', 'tags','newss'));
    }
    public function newsDetail($id)
    {
        $news = News::where('id', $id)->firstOrFail();
        $metatag = Meta_tag::firstOrFail();
        return view('front.newsDetail', compact('metatag','news'));
    }
    public function project()
    {
        $projects=Project::paginate(12);
        $metatag = Meta_tag::firstOrFail();
        return view('front.projects', compact('metatag', 'projects'));
    }
    public function projectDetail($id)
    {
        $projects=Project::with('attribute_options')->where('id',$id)->get();
        $atributes=Attribute::with('attributeOption')->get();
        $metatag = Meta_tag::firstOrFail();
        return view('front.projectDetail', compact('metatag', 'projects', 'atributes'));
    }
    public function service()
    {
        $solutioncategories=SolutionCategory::paginate(12);
        $metatag = Meta_tag::firstOrFail();
        return view('front.service', compact('metatag', 'solutioncategories'));
    }
    public function serviceDetail($id)
    {
        $solsubcategories=SolutionCategory::with('solutionsubcategory')->where('id',$id)->get();
        $metatag = Meta_tag::firstOrFail();
        return view('front.serviceDetail', compact('metatag', 'solsubcategories'));
    }
    public function team()
    {
        $teams=Team::all();
        $metatag = Meta_tag::firstOrFail();
        return view('front.team', compact('metatag', 'teams'));
    }
    public function teamDetail(Team $team,$id)
    {
        $team=Team::findOrFail($id);
        $metatag = Meta_tag::firstOrFail();
        return view('front.teamDetail', compact('metatag','team'));
    }
    public function contact()
    {
        $setting=Setting::firstOrFail();
        $metatag = Meta_tag::firstOrFail();
        return view('front.contact', compact('metatag', 'setting'));
    }
    public function store(){
        $stores=Store::all();
        return view('front.store',compact('stores'));
        }
}
