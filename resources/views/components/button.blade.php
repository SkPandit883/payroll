<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex flex-row items-center justify-center items px-4 py-2 bg-blue-700 w-full  cursor-pointer uppercase text-white rounded ']) }}>
    <h2>{{ $slot }}</h2>
</button>
