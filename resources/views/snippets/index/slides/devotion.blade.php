<div class="container-fluid my-card-slider slider mb-3">
    <div class="card-header" style="border-bottom: 0; padding-left: 0; padding-top: 20px">

        <div class="d-flex">
          <div class="flex-shrink-0">
            <img height="45" width="45" class="rounded-circle img-fluid" src="{{ asset('assets/imgs/Untitled_design__8_-removebg-preview.png') }}" alt="...">
          </div>
          <div class="flex-grow-1 ms-2">
            <span class="card-head-title" style="font-weight: 550">Seaching for God's Heartbeart</span> <br>
            <span style="font-size: 12px; color: rgb(179, 171, 171)">Daily believers Devotion</span>
          </div>
        </div>
        {{-- end header flex --}}
    </div>

    <div class="row">
        <div class="col-12 m-auto">
            <div class="owl-carousel owl-theme" style="border: 0">
                @foreach ($devotions as $devotion)

                    <div class="item" style="border: 0">
                        <a href="{{ route('show.devotion', $devotion->id) }}">
                        <div class="card shadow">
                            <img src="/storage/{{ $devotion->thumbnail }}" alt="" class="card-img-top">
                            <div class="card-body d-flex align-items-center pt-2">
                                <div style="margin-right: 12px">
                                    <h5 class="card-title"  style="text-transform: capitalize">{{ $devotion->title }}</h5>
                                    @php
                                        $date = Carbon::parse($devotion->display_date);
                                        $read_time = $date->isoFormat('MMMM Do YYYY'); 
                                    @endphp
                                    <span style="font-size: 12px; color: rgb(179, 171, 171); text-transform: capitalize">
                                        {{ $read_time }}
                                    </span>

                                    <span class="card-text" style="text-transform: capitalize">{!! Str::limit($devotion->memory_verse, 80) !!}</span>
                                </div>
                                <div class="remove-on-phone-view">
                                    <a href="/devotion/{{ $devotion->id }}" class="btn btn-primary btn-devotion">read.</a>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>

                @endforeach
                

            </div>
        </div>
    </div>
</div>
