<x-frontend::index title="Home - {{ config('app.name') }}">
    @include('frontend::context.hero_section')
    @include('frontend::context.company_overview')
    @include('frontend::context.featured_products')
    @include('frontend::context.services')
    @include('frontend::context.testimonials')
</x-frontend::index>
