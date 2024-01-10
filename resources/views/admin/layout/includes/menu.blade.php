            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="{{ route('admin.home') }}" class="app-brand-link">
                        <img style="width:130px" src="/assets/img/logo.png" alt="">
                    </a>
                    <a href="javascript:void(0);"
                        class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-item active">
                        <a href="{{ route('admin.home') }}" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home-circle"></i>
                            <div data-i18n="Analytics">Idarə Paneli</div>
                        </a>
                    </li>
                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Ana səhifə</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="{{ route('admin.slider.index') }}" class="menu-link">
                                    <i class='menu-icon bx bxs-spa'></i>
                                    <div data-i18n="Analytics">Slider</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                    <i class="menu-icon tf-icons bx bx-dock-top"></i>
                                    <div data-i18n="Account Settings">Statistika</div>
                                </a>
                                <ul class="menu-sub">
                                    <li class="menu-item">
                                        <a href="{{ route('admin.resulttitle.index') }}" class="menu-link">
                                            <div data-i18n="Account"> Nəticə Başlıqı</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="{{ route('admin.result.index') }}" class="menu-link">
                                            <div data-i18n="Notifications">Nəticə Ayarı</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.team.index') }}" class="menu-link">
                                    <i class='menu-icon bx bxl-steam'></i>
                                    <div data-i18n="Analytics">Komanda Üzvləri</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.missia.index') }}" class="menu-link">
                                    <i class='menu-icon bx bx-cube'></i>
                                    <div data-i18n="Analytics">Məqsədlərimiz</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.clients.index') }}" class="menu-link">
                                    <i class='menu-icon bx bxs-group'></i>
                                    <div data-i18n="Analytics">Müştərilər</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.vendorss.index') }}" class="menu-link">
                                    <i class='menu-icon bx bxl-venmo'></i>
                                    <div data-i18n="Analytics">Brendlər</div>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="menu-item">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-dock-top"></i>
                            <div data-i18n="Account Settings">Haqqımızda</div>
                        </a>
                        <ul class="menu-sub">



                            <li class="menu-item">
                                <a href="{{ route('admin.about.index') }}" class="menu-link">
                                    <i class='menu-icon bx bxs-spa'></i>
                                    <div data-i18n="Analytics">Haqqımızda</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('admin.faqs.index') }}" class="menu-link">
                                    <i class='bx bx-book-content menu-icon'></i>
                                    <div data-i18n="Analytics">FAQ</div>
                                </a>
                            </li>


                    </li>
                </ul>


                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Layihələr</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.project.index') }}" class="menu-link">
                                <i class='menu-icon bx bxs-spa'></i>
                                <div data-i18n="Analytics">Layihələr</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.attribute.index') }}" class="menu-link">
                                <i class='bx bx-book-content menu-icon'></i>
                                <div data-i18n="Analytics">Attributlar</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Həllər</div>
                    </a>
                    <ul class="menu-sub">

                        <li class="menu-item">
                            <a href="{{ route('admin.solutioncategory.index') }}" class="menu-link">
                                <i class='menu-icon bx bxs-category'></i>
                                <div data-i18n="Analytics">Həllər Üst Kategoriyası</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.solsubcategory.index') }}" class="menu-link">
                                <i class='menu-icon bx bxs-category'></i>
                                <div data-i18n="Analytics">Həllər Alt Kategoriyası</div>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Karyera</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.vacancy.index') }}" class="menu-link">
                                <i class='menu-icon bx bxs-card'></i>
                                <div data-i18n="Analytics">Vakansiyalar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                                <div data-i18n="Account Settings">Xəbərlər</div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="{{ route('admin.news.index') }}" class="menu-link">
                                        <i class='bx bx-news menu-icon'></i>
                                        <div data-i18n="Analytics">Xəbərlər</div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{ route('admin.newstags.index') }}" class="menu-link">
                                        <i class='bx bx-pyramid menu-icon'></i>
                                        <div data-i18n="Analytics">Xəbər Teqlər</div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Media</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.blogs.index') }}" class="menu-link">
                                <i class='bx bx-news menu-icon'></i>
                                <div data-i18n="Analytics">Bloqlar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.blogtags.index') }}" class="menu-link">
                                <i class='bx bx-pyramid menu-icon'></i>
                                <div data-i18n="Analytics">Bloq Teqlər</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.photos.index') }}" class="menu-link">
                                <i class='menu-icon bx bxs-camera'></i>
                                <div data-i18n="Analytics">Şəkillər</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.videos.index') }}" class="menu-link">
                                <i class='menu-icon bx bxs-video'></i>
                                <div data-i18n="Analytics">Videolar</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Düzənləmələr</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.settings.index') }}" class="menu-link">
                                <i class='bx bx-image menu-icon'></i>
                                <div data-i18n="Analytics">Logo Adres Ayarları</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.store.index') }}" class="menu-link">
                                <i class='bx bx-image bxs-spa'></i>
                                <div data-i18n="Analytics">Mağazalar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.socialicons.index') }}" class="menu-link">
                                <i class='menu-icon bx bxl-reddit'></i>
                                <div data-i18n="Analytics">Sosyal Iconlar</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.metatags.index') }}" class="menu-link">
                                <i class='bx bx-pyramid menu-icon'></i>
                                <div data-i18n="Analytics">Meta Teqlər</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon tf-icons bx bx-dock-top"></i>
                        <div data-i18n="Account Settings">Hesab ayarı</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="{{ route('admin.users.edit', Auth::user()->id) }}" class="menu-link">
                                <div data-i18n="Account">Hesab</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.users.create') }}" class="menu-link">
                                <div data-i18n="Notifications">Admin Əlavə Et</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="{{ route('admin.users.index') }}" class="menu-link">
                                <div data-i18n="Connections">Bütün Adminlər</div>
                            </a>
                        </li>
                    </ul>
                </li>
                </ul>
            </aside>
