<nav {{ $attributes }}>
    <ul class="flex space-x-3 text-slate-500 dark:text-slate-200">
        <li><a href="/">Home</a></li>

        @foreach ($links as $lable => $link)
            <li>→</li>
            <li><a href="{{ $link }}">{{ $lable }}</a></li>
        @endforeach
    </ul>
</nav>
