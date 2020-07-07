<script>
  const WEBROOT = '/';
  const ASSETS = '{{ asset('') }}';
  const IMAGES_FORMATS = {!! json_encode(config('images.formats'), JSON_PRETTY_PRINT) !!};
  const FIELDS = {!! json_encode(Modules\Architect\Fields\FieldConfig::get(), JSON_PRETTY_PRINT) !!};
  const WIDGETS = {!! json_encode(Modules\Architect\Widgets\WidgetConfig::get(), JSON_PRETTY_PRINT) !!};
  const CURRENT_USER = {!! Auth::user() ? json_encode(Auth::user(), JSON_PRETTY_PRINT) : 'null' !!};
  const LANGUAGES = {!! json_encode(Modules\Architect\Entities\Language::orderBy('name', 'DESC')->get(), JSON_PRETTY_PRINT) !!};
  const TYPOLOGIES = {!! json_encode(Modules\Architect\Entities\Typology::all(), JSON_PRETTY_PRINT) !!};
  const ROW_SETTINGS = ['htmlId','htmlClass','hasContainer','textAlign','hideBorders', 'boxClass','conditionalVisibility'];
  const COL_SETTINGS = ['htmlId','htmlClass','textAlign','stripped','labelAlign','valueAlign','display', 'hideBorders','conditionalVisibility'];
  const PAGE_SETTINGS = ['htmlClass','pageType'];
  const CONTENT_SETTINGS = ['htmlClass'];
  const CATEGORIES = {!! json_encode(Modules\Architect\Entities\Category::all(), JSON_PRETTY_PRINT) !!};
  const DEFAULT_LOCALE = '{{ Modules\Architect\Entities\Language::getDefault()->iso}}';
  const ROLES = {!! json_encode(config('roles'), JSON_PRETTY_PRINT) !!};
  const FONTS = {!! json_encode(config('fonts'), JSON_PRETTY_PRINT) !!};
  const ELEMENT_TEMPLATE_FIELDS = {!! json_encode(Modules\Extranet\Services\ElementTemplate\Fields\FieldConfig::get(), JSON_PRETTY_PRINT) !!};
</script>
