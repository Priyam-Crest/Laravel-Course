<div class="relative">
    @if ($type != 'textarea')
        @if ($formRef)
            <button type="button" class="absolute top-0 right-0 flex h-full items-center pr-2"
                @click="$refs['input-{{ $name }}'].value = ''; $refs['{{ $formRef }}'].submit();">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="h-4 w-4 text-slate-500 dark:text-slate-300">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        @endif
        <input x-ref="input-{{ $name }}" type="{{ $type }}"
      placeholder="{{ $placeholder }}"
      name="{{ $name }}" value="{{ old($name, $value) }}" id="{{ $name }}"
      @class([
          'w-full rounded-md border-0 text-sm ring-1 placeholder:text-slate-400 focus:ring-2 dark:bg-gray-800
        file:bg-gray-200 file:border-0
            file:me-2
            file:py-2 file:px-4
            dark:file:bg-gray-700 dark:file:text-neutral-200',
          'pr-8' => $formRef,
          'ring-slate-300' => !$errors->has($name),
          'ring-red-300' => $errors->has($name),
      ]) />
    @else
        <textarea id="{{ $name }}" name="{{ $name }}" @class([
            'w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 placeholder:text-slate-400 focus:ring-2 dark:bg-gray-800',
            'pr-8' => $formRef,
            'ring-slate-300' => !$errors->has($name),
            'ring-red-400' => $errors->has($name),
        ])>{{ old($name, $value) }}</textarea>
    @endif
    @error($name)
        <div class="mt-1 text-xs font-medium text-red-600 dark:text-red-500">
            {{ $message }}
        </div>
    @enderror
</div>
