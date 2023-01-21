<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Staff Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <a href="{{ route('staff.create') }}" class="shadow  border rounded py-2 px-3 text-gray-700 bg-white">Add staff</a>
                    <div class="overflow-hidden" style="margin-top: 25px;">
                        <table class="w-full text-center" style="table-layout: fixed">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        #
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        First Name
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Second Name
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Company
                                    </th>
                                    
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Email
                                    </th>

                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Phone Number
                                    </th>

                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Edit / Delete
                                    </th>
                                </tr>
                            </thead class="border-b">
                            <tbody>
                                @foreach ($staffs as $key => $staff)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $staff->id ?? '' }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $staff->firstName ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $staff->secondName ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $staff->company->name ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $staff->email ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $staff->phone ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('staff.edit', $staff->id) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('staff.destroy', $staff->id) }}" method="POST"
                                            onsubmit="return confirm('Are you sure you want to DELETE?');"
                                            style="display: inline-block;" class="text-red-500">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                        </form>
                                    </td>
                                </tr class="bg-white border-b">
                                @endforeach
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="col-md-12">
                                {{ $staffs->links('pagination::tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
