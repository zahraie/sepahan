@extends('layouts.master')

@section('content')
    <section class="row">

        <section class="col-lg-12">
            <a href="{{ route('article.show', $article->id) }}" class="text-decoration-none d-block mb-4">
                <section class="card bg-light ">
                    <section class="card-body ">
                        <section class="d-flex justify-content-between ">
                            <section class="info-box-body">



                                <p>{{ $article->content }}</p>


                            </section>
                            <section class="info-box-icon">
                                <i class="fas fa-chart-line"></i>
                            </section>
                        </section>
                    </section>
                    <section class="card-footer info-box-footer">
                        <i class="fas fa-clock mx-2"></i> به روز رسانی شده در : 21:42 بعد از ظهر

                    </section>

                </section>
            </a>
        </section>

    </section>



    @endsection






