<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <a href="{{ route('company.create') }}" class="shadow  border rounded py-2 px-3 text-gray-700 bg-white">Add company</a>
                    <div class="overflow-hidden" style="margin-top: 25px;">
                        <table class="w-full text-center" style="table-layout: fixed">
                            <thead class="border-b bg-gray-800">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        #
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Name
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Email
                                    </th>
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Website
                                    </th>
                                    
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Logo
                                    </th>
                                    
                                    <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                        Edit / Delete
                                    </th>
                                </tr>
                            </thead class="border-b">
                            <tbody>
                                @foreach ($companies as $key => $company)
                                <tr class="bg-white border-b">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                        {{ $company->id ?? '' }}
                                    </td>
                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $company->name ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $company->email ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        {{ $company->website ?? '' }}
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        @if ($company->logo)
                                            <a href="{{ asset("storage/images/" . $company->logo) }}" target="_blank">
                                                <img src="{{ asset("storage/images/" . $company->logo) }}" alt="">
                                            </a>
                                        @endif
                                    </td>

                                    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                        <a href="{{ route('company.edit', $company->id) }}">
                                            Edit
                                        </a>
                                        <form action="{{ route('company.destroy', $company->id) }}" method="POST"
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
                                {{ $companies->links('pagination::tailwind') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
