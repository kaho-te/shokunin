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
        @foreach ($recommends as $recommend)
            <div class="result px-5 py-2">
                <h1 class="text-xl font-bold">{{ $recommend->name }}</h1>
                <div class="text-xs">開催期間： {{ $recommend->start_date }} 〜 {{ $recommend->end_date }}</div>
                <div class="flex">
                    @foreach ($recommendTypes as $recommendType)
                        @continue($recommendType->id != $recommend->id)
                        <div class="type flex mx-2 px-2 py-1">
                            <div><img src={{ $recommendType->type_icon }} alt=""></div>
                            <div>
                                <div class="text-xs">{{ $recommendType->type_name }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="text-xs">adult {{ $recommend->adult_price }} 円（child {{ $recommend->child_price }}円）</div>
                <div class="flex ">
                    <div>
                        <img src={{ $recommend->image }} alt="パッケージ画像" width=140 height=80>
                    </div>
                    <div class="text-xs break-all">
                        {!! nl2br(e($recommend->description)) !!}
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
