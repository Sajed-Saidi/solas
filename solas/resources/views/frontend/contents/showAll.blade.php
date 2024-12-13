@extends('frontend.layouts.app')

@push('style')
    <style>
        :root {
            --heading-color: #3a98d4;
            --accent-color: #f4a261;
        }

        .header {
            --background-color: #3a98d4;
        }

        .all-content {
            background-color: #f7f7f7;
        }

        .filters select,
        .filters input {
            border-radius: 0.375rem;
            padding: 0.5rem 1rem;
        }

        /* Card Styles for Content */
        .content-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .content-card:hover {
            transform: translateY(-8px);
        }

        .content-card .img-cont {
            margin: auto;
            height: 150px;
            padding: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .content-card img {
            max-width: 100%;
            height: 120px;
            object-fit: cover;
        }

        .content-card h4 {
            color: var(--heading-color);
            font-size: 1.1rem;
            margin: 1rem;
        }

        .content-card p {
            padding: 0 1rem;
            color: #6c757d;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .content-card a {
            /* padding: 0.5rem 1rem; */
            margin: 0 1rem 1rem;
            border-radius: 0.375rem;
        }

        .content-card .content-type {
            font-size: 16px;
            font-weight: 500;
            line-height: 19px;
            padding: 10px 20px;
            background: color-mix(in srgb, var(--accent-color), transparent 95%);
            color: var(--accent-color);
            border-radius: 7px;
            display: inline-block;
        }

        .pagination .page-link {
            color: var(--heading-color);
        }

        .pagination .page-item.active .page-link {
            color: white;
            background-color: var(--heading-color);
            border-color: var(--heading-color);
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {

            .filters select,
            .filters input,
            .filters button {
                font-size: 0.875rem;
            }

            .content-card {
                margin-bottom: 1.5rem;
            }

            .section-title {
                text-align: center;
            }
        }
    </style>
@endpush

@section('content')
    <main class="all-content p-5">
        <x-section-heading miniTitle="{{ ($type == 'all' ? 'Content' : $type == 'activity') ? 'Activities' : 'Articles' }}"
            title="{{ ($type == 'all' ? 'Check All Content' : $type == 'activity') ? 'Check our latest activities' : 'Learn more about autism' }}"
            hideRight="true">
            <form id="search-form" class="mt-5 mt-md-0" action="{{ route('contents.showAll') }}" method="GET">
                @csrf
                @method('GET')
                <div class="input-group mb-3">
                    <select id="search-type" name="type" class="form-select" style="max-width: 150px;">
                        <option value="">Select Content Type</option>
                        <option {{ $type == 'all' ? 'selected' : '' }} value="all">All</option>
                        <option {{ $type == 'activity' ? 'selected' : '' }} value="activity">Activities</option>
                        <option {{ $type == 'article' ? 'selected' : '' }} value="article">Articles</option>
                    </select>
                </div>
            </form>

        </x-section-heading>

        <div class="container">
            @if (count($contents) > 0)
                <div class="row">
                    @foreach ($contents as $key => $content)
                        <div class="col-md-4 mb-4">
                            <div class="content-card">
                                <div class="img-cont">
                                    <img src="{{ asset($content->images != null ? 'storage/' . $content->images[0] : 'frontend/assets/img/activities/act1.jpg') }}"
                                        alt="Content Image" />
                                </div>
                                <h4 class="truncate-title">{{ $content->title }}</h4>
                                <p class="truncate">
                                    {{ $content->description }}
                                </p>
                                <a class="read-more" href="{{ route('contents.show', $content->id) }}">
                                    <span>Read More</span>
                                    <i class="bi bi-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="pagination-container">
                    {!! $contents->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            @else
                <h4 class="text-center bg-white p-4 shadow-sm">No Contents Found</h4>
            @endif
        </div>
    </main>
@endsection


@push('scripts')
    <script>
        document.querySelector('#search-type').addEventListener('change', function() {
            document.querySelector('#search-form').submit();
        });
    </script>
@endpush
