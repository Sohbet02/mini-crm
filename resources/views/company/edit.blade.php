<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="/company/{{ $company->id }}" method="post" class="w-full" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="w-full">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Company Name
                                </label>
                                <input class="shadow appearance-none border {{ $errors->has('name') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Eternal Computers" name="name" value="{{ old('name', $company->name) }}">
                                @if($errors->has('name'))
                                    <p class="text-red-500 text-xs italic mb-6">
                                        {{ $errors->first('name') }}
                                    </p>
                                @endif
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="johndoe@gmail.com" name="email" value="{{ old('email', $company->email) }}">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                                    Company Website
                                </label>
                                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="website" type="text" placeholder="Eternal Computers" name="website" value="{{ old('website', $company->website) }}">
                            </div>
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="logo">
                                    Logo
                                </label>
                                <input id="logo" type="file" name="logo" class="cursor-pointer" value="">
                            </div>

                            <div class="mb-4">
                                <input id="submit" type="submit" value="Edit Company" class="mt-8 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline hover:cursor-pointer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>