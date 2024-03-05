<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row d-flex flex-row my-3 bg-gray">
            <div class="col">
                <h2>Start Time: 11:20 AM</h2>
            </div>
            <div class="col">
                <h2>Start Time: 12:40 AM</h2>
            </div>
            {{-- <h2>End Time: 12:40 AM</h2> --}}
        </div>
        
        <div class="row">
            <div class="col-md-2 bg-base">
                <h5>Nahid Hasan Sourav</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet suscipit reprehenderit voluptatum aut laboriosam, soluta labore veritatis aperiam tempore placeat sapiente. Rem necessitatibus, aspernatur animi obcaecati nulla, aliquam mollitia vel voluptatibus adipisci delectus perspiciatis veniam molestias assumenda vero atque nam doloremque! Consequatur ipsum quae voluptas quos aliquam quo nihil illum quasi autem rem. Accusantium, commodi. Qui corporis iure maxime at ducimus ullam aspernatur, magnam consequuntur laborum incidunt vero doloribus officiis optio explicabo sit voluptas veritatis. Repudiandae nisi, labore voluptate accusantium laudantium unde, sapiente voluptas sint non saepe beatae rerum modi vero omnis in doloremque dignissimos sit voluptatem ipsum dolorum eos consequatur. Quae dolore non odit, hic iste necessitatibus soluta excepturi, impedit, nobis facere similique? Quasi commodi natus ipsa in sit.</p>
            </div>
            <div class="col-md-10 bg-base">
                <div class="row">
                    <div class="row g-2">
                        {{-- {{ dd(count($posts)) }} --}}
                        @foreach ($posts as $post)
                        <div class="col-md-4">
                            <div class="card" style="width: 18rem;">
                                <img src="{{ $post->image }}" class="card-img-top" alt="..." style="height:50%">
                                <div class="card-body">
                                    <h5 class="card-title">{{ substr($post->title, 0,40)}}...</h5>
                                    <p class="card-text">{{  substr($post->description, 0,100) }}...<span class="text-danger mx-1">READ MORE</span></p>
                                  <a href="#" class="btn btn-primary">Name : {{  $post->user->name}}</a><p></p>
                                  <span>Created By <small>{{  $post->user->email}}</small></span>
                                </div>
                              </div>
                        </div>
                 
                        @endforeach
                       
                       
                    </div>
                    <div class="row bg-base p-2">
                        <a href="https://github.com/Nahid-Hasan-Sourav/CTP_Task.git">This is My GITHUB REPOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>