<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-primary inline-block text-white border-none transition-all duration-100 ease-linear w-fit text-center px-7 py-3 rounded-md select-none font-mont font-bold text-lg mt-1 mb-2 tablet:w-full cursor-pointer hover:scale-105 hover:brightness-110 phone:py-2']) }}>
    {{ $slot }}
</button>
