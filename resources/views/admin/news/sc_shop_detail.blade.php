

<section>
    <div class="calendar_container  d-flex justify-content-center" id="calendar_container">
        <div class="content  box-shadow container">
            <div class="row d-flex">
                <div class="note col-12 col-xl-12 d-flex ">
                    <div class="note_box col-12 d-flex" >
                    <h3>情報更新</h3>
                    <thead>
                        <img class="img-fluid" width="250" src="{{asset($news->img)}}" alt="">
                        <li>{{$news->txtdate}}</li>
                        <li>{{$news->location}}</li>
                        <li>{{$news->title}}</li>
                        <li>{{$news->content}}</li>

                    </thead>
                    </div>


                </div>

            </div>
        </div>
    </div>
</section>

