@extends('admin.layout.app')
@section('content')
    <h3 style="margin-left: 20px">Atributlar</h3>
    @foreach ($project as $pro)
        <div class="container-fluid">
            <form action="{{ route('admin.attributeupdate', ['id' => $pro->id]) }}" method="post">
                @csrf
                <div class="accordion accordion-flush" id="accordionAttribute">
                    @foreach ($attributes as $key => $attribute)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-heading{{ $key }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-{{ $key }}" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    {{ $attribute->name }}
                                </button>
                            </h2>

                            <div id="flush-{{ $key }}" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionAttribute" style="">
                                <div class="accordion-body">
                                    @foreach ($attribute->attributeOption as $atribut)
                                        <div style="margin: 10px;">
                                            <input type="checkbox" name="attributeoption_id[]" value="{{ $atribut->id }}"
                                                id="checkbox-{{ $attribute->id }}-{{ $atribut->id }}"
                                                class="category-checkbox"
                                                @foreach ($pro->attribute_options as $attributeoption)
                                {{ $atribut->id == $attributeoption->id ? 'checked' : '' }} @endforeach>
                                            <label for="checkbox-{{ $attribute->id }}-{{ $atribut->id }}">
                                                {{ $atribut->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <br>
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    @endforeach
    @push('scripts')
        <script>
    document.addEventListener("DOMContentLoaded", function () {
        const categoryCheckboxes = document.querySelectorAll('.category-checkbox');

        categoryCheckboxes.forEach(function (checkbox) {
            checkbox.addEventListener('change', function () {
                if (this.checked) {
                    // If the checkbox is checked, uncheck other checkboxes in the same category
                    const categoryId = this.id.split('-')[1];
                    categoryCheckboxes.forEach(function (otherCheckbox) {
                        if (otherCheckbox.id.split('-')[1] === categoryId && otherCheckbox !== checkbox) {
                            otherCheckbox.checked = false;
                        }
                    });
                }
            });
        });
    });
</script>

    @endpush
@endsection
