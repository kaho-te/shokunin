<x-app-layout>
    <div class="top-image" style="background-image: url({{ url('/storage/shutterstock_1543757588.jpg') }})">
        <form class="text-xs pb-10 h-full flex justify-center items-end" method="GET" action="{{ route('packages.search') }}">
            <div class="top-warapper flex p-1">
                <div class="flex items-center">
                    <input type="date" class="top-form-left text-xs" required id="date" name="date">
                    <div class="flex items-center top-form-right">
                        <input type="number" class="top-form-inner text-xs w-14 mr-1 box" required placeholder="adlut" name="adult_scale">
                        <input type="number" class="top-form-inner text-xs w-14 box" required placeholder="child" name="child_scale">
                    </div> 
                    <input type="image" src="{{ asset('storage/vector.png') }}" alt="送信する" class="pl-1 h-5">
                </div>
    
            </div>
        </form>
    </div>

    <div class="bg-color-red">
        Search by category
    </div>
    <div id="scroll" class="mx-2 my-2 flex">
        @foreach ($types as $type)
            <div class="w-1/3">
                <img class="w-full" src="{{ asset('storage/' . $type->menu_image) }}" alt="">
            </div>
        @endforeach
    </div>

    <div class="bg-color-red">
        Recommend
    </div>
    <div id="scroll" class="h-1/2 w-full">
        @foreach ($recommends as $recommend)
            <div id="content" class="border border-white h-5/6 w-8/12 px-5 py-3 mx-5 my-3">
                <div class="w-full">
                    <img src="{{ asset('storage/' . $recommend->image) }}" alt="パッケージ画像" class="w-full">
                </div>

                <h1 class="my-1 text-base font-bold">{{ $recommend->name }}</h1>

                <div class="my-1 text-xs">
                    adult {{ $recommend->adult_price }} 円（child {{ $recommend->child_price }}円）
                </div>

                <div class="flex flex-wrap">
                    @foreach ($recommendTypes as $recommendType)
                        @continue($recommendType->id != $recommend->id)
                        <div class="type flex mr-2 mb-2 px-2 py-1">
                            <div>
                                <img src="{{ asset('storage/' . $recommendType->type_icon) }}" alt="">
                            </div>
                            <div>
                                <div class="text-xs">{{ $recommendType->type_name }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="pkg-text-paragraph text-xs break-all">
                    {!! nl2br(e($recommend->description)) !!}
                </div>

                <div class="my-3 flex justify-between">
                    <div>
                        <img src="dummy.png"><span class="text-xs font-bold">WOW</span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="bg-color-red">
        Ongoing
    </div>
    @foreach ($packages as $package)
        <div class="result px-5 py-3">
            <h1 class="text-xl font-bold">{{ $package->name }}</h1>
            <div class="text-xs my-2">開催期間： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>
            <div class="flex">
                @foreach ($packageTypes as $packageType)
                    @continue($packageType->id != $package->id)
                    <div class="type flex mx-2 mb-2 px-2 py-1">
                        <div>
                            <img src="{{ asset('storage/' . $packageType->type_icon) }}" alt="">
                        </div>
                        <div>
                            <div class="text-xs">{{ $packageType->type_name }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-xs">adult {{ $package->adult_price }} 円（child {{ $package->child_price }}円）</div>
            <div class="flex my-3">
                <div class="pkg-img-area">
                    <img src="{{ asset('storage/' . $package->image) }}" alt="パッケージ画像" class="pkg-img">
                </div>
                <div class="pkg-text-area text-xs break-all">
                    {!! nl2br(e($package->description)) !!}
                </div>
            </div>

            <div class="my-3 flex justify-between">
                <div>
                    <img src="dummy.png"><span class="text-xs font-bold">WOW</span>
                </div>
                <div class="detail_btn">
                    <button onclick="location.href='{{ route('packages.show', $package) }}'"
                        class="px-5 py-1">detail<span class="arrow-right"></span></button>
                </div>
            </div>
        </div>
    @endforeach

    <script>
        const scrollElement = document.querySelector("#scroll");

        scrollElement.addEventListener("wheel", (e) => {
            if (Math.abs(e.deltaY) < Math.abs(e.deltaX)) return;

            const maxScrollLeft = scrollElement.scrollWidth - scrollElement.clientWidth;

            if (
                (scrollElement.scrollLeft <= 0 && e.deltaY < 0) ||
                (scrollElement.scrollLeft >= maxScrollLeft && e.deltaY > 0)
            )
                return;

            e.preventDefault();
            scrollElement.scrollLeft += e.deltaY;
        });
    </script>

</x-app-layout>
