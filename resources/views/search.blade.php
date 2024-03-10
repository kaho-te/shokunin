<x-app-layout>
  <div class="py-3 px-3">
    <div class="text-xs font-bold">Applicable <span class="text-2xl">{{ $resultCnt }}</span> item</div>
  </div>
  @foreach ($packages as $package)
  <div class="result px-5 py-3">
    <h1 class="text-xl font-bold">{{ $package->name }}</h1>
    <div class="text-xs my-2">開催期間： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>
    <div class="flex">
      @foreach ($packageTypes as $packageType)
      @continue($packageType->id != $package->id )
        <div class="type flex mx-2 mb-2 px-2 py-1">
          <div><img src={{ $packageType->type_icon }} alt=""></div>
          <div>
            <div class="text-xs">{{ $packageType->type_name }}</div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="text-xs">adult {{ $package->adult_price }} 円（child {{ $package->child_price }}円）</div>
    <div class="flex my-3">
      <div class="pkg-img-area pr-4">
        <img src="{{ asset('storage/' . $package->image) }}"  alt="パッケージ画像" class="pkg-img">
      </div>
      <div class="pkg-text-area text-xs break-words h-1/3" >
        {!! nl2br(e($package->description)) !!}
      </div>      
    </div>

    <div class="my-3 flex justify-between">
      <div>
        <img src="dummy.png"><span class="text-xs font-bold">WOW</span>
      </div>
      <div class="detail_btn">
        <button onclick="location.href='{{ route('packages.show',$package) }}'"  class="px-5 py-1">detail<span class="arrow-right"></span></button>
      </div>
    </div>


  </div>
  @endforeach

</x-app-layout>