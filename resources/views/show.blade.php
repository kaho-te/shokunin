<x-app-layout>
  <div class="px-5 py-2">
    <h1 class="text-xl font-bold">{{ $package->name }}</h1>
    <div class="text-xs">開催期間： {{ $package->start_date }} 〜 {{ $package->end_date }}</div>
    @foreach ($artisanTypes as $artisanType)
      <div>
        <div><img src={{ $artisanType->image }} alt=""></div>
        <div>
          <div>{{ $artisanType->name }}</div>
        </div>
      </div>
    @endforeach
    <div class="text-xs">adult {{ $package->adult_price }} 円（child {{ $package->child_price }}円）</div>
    <img src={{ $package->image }} alt="パッケージ画像" width=350 height=200>
    <div class="my-2"><img src="dummy.png"><span class="text-xs font-bold">WOW</span></div>
    <div class="text-xs break-words whitespace-pre-wrap">{!! nl2br(e($package->description)) !!}</div>
    <div id="content" class="mx-auto">
      <h2 class="text-base font-bold text-center">Content</h2>
      <div class="text-xs leading-6">{!! nl2br(e($package->plan)) !!}</div>
    </div>
    <div class="reserve_btn my-12 text-center">
      <button onclick="location.href='{{ route('packages.index') }}'"  class="px-16 py-3">Reserve</button>
    </div>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        @foreach ($package->get_artisans as $artisan)
          <div>
            <div><img src={{ $artisan->image }} alt=""></div>
            <div>
              <div class="text-base font-bold">{{ $artisan->name }}</div>
              <p class="text-xs break-words whitespace-pre-wrap">{{ $artisan->description }}</p>
              <button class="text-xs" onclick="location.href='dummy' ">detail</button>
            </div>
          </div>
        @endforeach
        <div class="reserve_btn my-12 text-center">
          <button onclick="location.href='{{ route('packages.index') }}'"  class="px-16 py-3">Reserve</button>
        </div>
    </div>
  </div>
</x-app-layout>