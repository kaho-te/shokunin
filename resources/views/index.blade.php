<x-app-layout>
    <div class="top-image" style="background-image: url({{ url('/storage/shutterstock_1543757588.jpg') }})">
    </div>
    <div class="bg-color-red">
        Search by category
    </div>
    <div class="flex">
        @foreach ($types as $type)
            <div><img src={{ $type->menu_image }} alt=""></div>
        @endforeach
    </div>


    <div class="bg-color-red">
        Recommend
    </div>
    <div class="w-full">
        @foreach ($recomends as $recomend)
            <div class="result px-5 py-2">
                <h1 class="text-xl font-bold">{{ $recomend->name }}</h1>
                <div class="text-xs">開催期間： {{ $recomend->start_date }} 〜 {{ $recomend->end_date }}</div>
                <div class="flex">
                    @foreach ($recomendTypes as $recomendType)
                        @continue($recomendType->id != $recomend->id)
                        <div class="type flex mx-2 px-2 py-1">
                            <div><img src={{ $recomendType->type_icon }} alt=""></div>
                            <div>
                                <div class="text-xs">{{ $recomendType->type_name }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-xs">adult {{ $recomend->adult_price }} 円（child {{ $recomend->child_price }}円）</div>
                <div class="flex ">
                    <div>
                        <img src={{ $recomend->image }} alt="パッケージ画像" width=140 height=80>
                    </div>
                    <div class="text-xs break-all">
                        {!! nl2br(e($recomend->description)) !!}
                    </div>
                </div>
                <div class="my-3 flex justify-between">
                    <div>
                        <img src="dummy.png"><span class="text-xs font-bold">WOW</span>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="flex w-1/3">
        </div>
    </div>

    <div class="bg-color-red">
        Ongoing
    </div>
    @foreach ($packages as $package)
        <div class="result px-5 py-2">
            <h1 class="text-xl font-bold">{{ $package->name }}</h1>
            <div class="text-xs">開催期間： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>
            <div class="flex">
                @foreach ($packageTypes as $packageType)
                    @continue($packageType->id != $package->id)
                    <div class="type flex mx-2 px-2 py-1">
                        <div><img src={{ $packageType->type_icon }} alt=""></div>
                        <div>
                            <div class="text-xs">{{ $packageType->type_name }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="text-xs">adult {{ $package->adult_price }} 円（child {{ $package->child_price }}円）</div>
            <div class="flex ">
                <div>
                    <img src={{ $package->image }} alt="パッケージ画像" width=140 height=80>
                </div>
                <div class="text-xs break-all">
                    {!! nl2br(e($package->description)) !!}
                </div>
            </div>

            <div class="my-3 flex justify-between">
                <div>
                    <img src="dummy.png"><span class="text-xs font-bold">WOW</span>
                </div>
                <div class="detail_btn">
                    <button onclick="location.href='{{ route('packages.show', $package) }}'"
                        class="px-5 py-1">detail</button>
                </div>
            </div>
        </div>
    @endforeach
</x-app-layout>
