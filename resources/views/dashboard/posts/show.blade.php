@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-3">
        <div class="col-lg-8">
            <h1>{{ $post->title }}</h1>
            <a class="btn btn-success" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back Posts</a>
            <a class="btn btn-warning" href="/dashboard/posts/{{ $post->slug }}/edit"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger border-0" onclick="return confirm('are you sure')"><span data-feather="x-circle"></span> Delete</button>
              </form> 
              @if ($post->image)
                <div style="max-height: 350px; overflow: hidden;">
                <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->categories->name }}" class="img-fluid mt-3">
                </div>
              @else
              <div style="max-height: 350px; overflow: hidden;">
                <img src="https://source.unsplash.com/random/1200×200?{{ $post->categories->name }}" alt="{{ $post->categories->name }}" class="img-fluid mt-3">
              </div>
              @endif

            <article class="my-3">
                {!! $post->body !!}
            </article>
            <a class="text-decoration-none" href="/dashboard/posts"><< Back Posts</a>
        </div>
    </div>
</div>
@endsection

{{-- Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus vel eum doloribus, adipisci obcaecati dolore provident, quae necessitatibus earum possimus magni illo quo sint alias, vero atque magnam consectetur pariatur. 

Ex culpa voluptate ducimus, mollitia libero, dolorem quam enim delectus neque itaque quidem facilis, unde vitae ratione atque perspiciatis sunt incidunt repellendus facere saepe nulla consequatur aut sequi nisi? Deserunt dolor possimus veniam vel provident nostrum aliquid aut nesciunt, dolores unde eius dolorem? 

Repudiandae harum voluptate adipisci neque accusamus qui quaerat non facilis possimus in esse, eaque illo, nulla animi totam asperiores natus saepe, illum explicabo. Magni laboriosam magnam placeat. Nulla adipisci numquam incidunt tempora odit dolorum quia vitae dignissimos dolore nesciunt est deserunt dolores, quas, doloremque fugiat!

Sequi quidem, quod, voluptatem repellat assumenda neque eligendi magni quasi itaque ipsa dolor reprehenderit. Ducimus fugit vitae, voluptas eligendi ut incidunt, molestiae sunt velit nihil in cumque quas? Quidem corrupti corporis magni iure veritatis aperiam reiciendis incidunt accusamus placeat? Vero excepturi sit omnis quos dicta ullam officia commodi modi. 

Earum ad repellendus asperiores quam voluptas sunt sapiente! Sed expedita, quasi aut consectetur cumque assumenda magnam quos voluptates, inventore tenetur quae aspernatur laudantium necessitatibus amet fuga nostrum, distinctio quod pariatur voluptatem animi iste. --}}