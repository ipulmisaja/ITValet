@switch($state)
    @case('selesai perbaikan')
        <span
            class="bg-primary-100 text-primary-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-primary-400 border border-primary-100 dark:border-primary-500 whitespace-nowrap">{{ ucwords($state) }}</span>
    @break

    @case('belum perbaikan')
        <span
            class="bg-yellow-100 text-yellow-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-yellow-400 border border-yellow-100 dark:border-yellow-500 whitespace-nowrap">{{ ucwords($state) }}</span>
    @break

    @case('sedang perbaikan')
        <span
            class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-green-400 border border-green-100 dark:border-green-500 whitespace-nowrap">{{ ucwords($state) }}</span>
    @break

    @case('batal perbaikan')
        <span
            class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-md dark:bg-gray-700 dark:text-red-400 border border-red-100 dark:border-red-500 whitespace-nowrap">{{ ucwords($state) }}</span>
    @break
@endswitch
