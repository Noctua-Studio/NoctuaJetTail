<button {{ $attributes->merge(['type' => 'button', 'class' => 'bg-gray-300 inline-block text-shadeDark border-none transition-all duration-100 ease-linear w-fit text-center px-7 py-3 rounded-md select-none font-mont font-bold text-lg mt-1 mb-2 tablet:w-full cursor-pointer hover:scale-105 hover:brightness-105 phone:py-2']) }}>
    {{ $slot }}
</button>
