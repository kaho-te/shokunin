<x-app-layout>
  <div class="px-5 py-2">
    <h1 class="text-xl font-bold">{{ $package->name }}</h1>
    <div class="text-xs my-2">開催期間： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>
    <div class="flex">
    @foreach ($artisanTypes as $artisanType)
    <div class="type flex mx-2 mb-2 px-2 py-1">
        <div><img src="{{ asset('storage/' . $artisanType->image) }}" alt=""></div>
        <div>
          <div class="text-xs">{{ $artisanType->name }}</div>
        </div>
      </div>
    @endforeach
  </div>
    <div class="text-xs">adult {{ $package->adult_price }} 円（child {{ $package->child_price }}円）</div>
    <div class="my-3"><img src="{{ asset('storage/' . $package->image) }}" alt="パッケージ画像" width=350 height=200></div>
    <div class="my-2"><img src="{{ asset('storage/dummy.png') }}"><span class="text-xs font-bold">WOW</span></div>
    <div class="text-xs break-words whitespace-pre-wrap">{!! nl2br(e($package->description)) !!}</div>
    <div id="content" class="mx-auto my-5 py-3 px-5 w-3/4">
      <h2 class="text-base font-bold text-center">Content</h2>
      <div class="text-xs py-2 leading-6">{!! nl2br(e($package->plan)) !!}</div>
    </div>
    <div class="reserve_btn my-12 text-center">
      <button onclick="location.href='{{ route('packages.index') }}'"  class="px-16 py-3">Reserve<span class="arrow-right"></span></button>
    </div>
    <div class="max-w-7xl mx-auto">
        @foreach ($package->get_artisans as $artisan)
          <div class="artisan-area flex my-4 py-4 px-3">
            <div class="w-1/3">
              <img src="{{ asset('storage/' . $artisan->image) }}" alt="">
            </div>
            <div class="w-2/3">
              <div class="text-base font-bold">{{ $artisan->name }}</div>
              <div class="text-xs break-all my-2">{{ $artisan->description }}</div>
              <div class="detail_btn text-right">
                <button class="text-xs px-5 py-1" onclick="location.href='dummy' ">detail</button>
              </div>
          </div>
        </div>
        @endforeach
        <div class="reserve_btn my-12 text-center">
          <button onclick="location.href='{{ route('packages.index') }}'"  class="px-16 py-3">Reserve</button>
        </div>
    </div>
  </div>
</x-app-layout>