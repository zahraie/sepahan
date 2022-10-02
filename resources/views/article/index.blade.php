@extends('layouts.master')

@section('content')
    <section class="row">
        @foreach ($articles as $article)
        <section class="col-lg-4 col-md-8 col-12">
            <a href="{{ route('article.show', $article->id) }}" class="text-decoration-none d-block mb-4">
                <section class="card bg-light ">
                    <section class="card-body ">
                        <section class="d-flex justify-content-between ">
                            <section class="info-box-body">



                                <h5>{{ $article->title }}</h5>
                                <p>{{ $article->summary }}</p>
                                <p>مربوط به دسته بندی :{{ $article->category->title }}</p>


                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر

                    </section>
                    <a href="{{ route('article.show', $article->id) }}" class="btn btn-secondary">جزئیات</a>
                </section>
            </a>
        </section>

        @endforeach
        {{ $articles->links() }}
    </section>



    @endsection






