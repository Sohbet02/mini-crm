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
                    <form action="/staff/{{ $staff->id }}" method="post" class="w-full">
                        @csrf
                        @method('PUT')
                        <div class="w-full">
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="firstName">
                                    First Name
                                </label>
                                <input class="shadow appearance-none border {{ $errors->has('firstName') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="firstName" type="text" placeholder="John" name="firstName" value="{{ old('firstName', $staff->firstName) }}">
                                @if($errors->has('firstName'))
                                    <p class="text-red-500 text-xs italic mb-6">
                                        {{ $errors->first('firstName') }}
                                    </p>
                                @endif
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="secondName">
                                    Last Name
                                </label>
                                <input class="shadow appearance-none border {{ $errors->has('secondName') ? 'border-red-500' : '' }} rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="secondName" type="text" placeholder="Doe" name="secondName" value="{{ old('secondName', $staff->secondName) }}">
                                @if($errors->has('secondName'))
                                    <p class="text-red-500 text-xs italic mb-6">
                                        {{ $errors->first('secondName') }}
                                    </p>
                                @endif
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="company_id">
                                    Choose Company
                                </label>
                                <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="company_id" name="company_id" value="{{ old('company_id', $staff->company_id) }}">
                                    @foreach ($companies as $company)
                                        <option value="{{ $company->id }}">{{ $company->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                                    Email
                                </label>
                                <input class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="johndoe@gmail.com" name="email" value="{{ old('email', $staff->email) }}">
                            </div>

                            <div class="mb-4">
                                <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">
                                    phone
                                </label>
                                <input  class="shadow appearance-none border  rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="phone" type="tel" name="phone" value="{{ old('phone', $staff->phone) }}">
                            </div>

                            <div class="mb-4">
                                <input id="submit" type="submit" value="Edit Staff" class="mt-8 shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline hover:cursor-pointer">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>