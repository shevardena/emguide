<div class="m-4">
    <div class="flow-root">
        <h2 class="float-left text-2xl font-extrabold dark:text-white">
            {{ $heading }}
        </h2>
        @if(isset($can))
            @can($can)
                @if($url)
                    <Link href="{{ $url }}"
                       class="float-right mr-2 text-white bg-cyan-600 hover:bg-cyan-700 focus:ring-4 focus:ring-cyan-200 font-medium rounded-sm text-sm inline-flex items-center px-3 py-2 text-center">
                        <i class="fa-solid fa-plus mr-1"></i>
                        {{ $title }}
                    </Link>
                @endif
            @endcan
        @endif
    </div>
</div>
