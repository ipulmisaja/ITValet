@switch($repair)
    @case(0)
        <span
            class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-yellow-400 border border-yellow-100 dark:border-yellow-500 whitespace-nowrap">Tidak</span>
    @break

    @case(1)
        <span
            class="bg-primary-100 text-primary-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-primary-400 border border-primary-100 dark:border-primary-500 whitespace-nowrap">Ya</span>
    @break

    @case(2)
        <span
            class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-red-400 border border-red-100 dark:border-red-500 whitespace-nowrap">-</span>
    @break
@endswitch
