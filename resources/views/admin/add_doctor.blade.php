<!DOCTYPE html>
<html lang="en">

<head>

    @include('admin.css')
</head>

<body>
    <div class="container-scroller">

        @include('admin.sidebar')
        @include('admin.navbar')

        <div class="container-fluid page-body-wrapper">


            <div class="container mx-auto">
                {{-- Flash message --}}
                <div x-data="{ showMessage: true }" x-show="showMessage"
                    x-init="setTimeout(() => showMessage = false, 2000)">
                    @if (session()->has('message'))
                    <div class="px-8 py-6 bg-green-400 text-white flex justify-between rounded">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 mr-6" viewBox="0 0 20 20"
                                fill="currentColor">
                                <path
                                    d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                            </svg>
                            <p>{{ session()->get('message') }}</p>
                        </div>
                    </div>
                    @endif
                </div>
                <div class="max-w-xl p-5 mx-auto my-16 bg-slate-800 rounded-md shadow-2xl">
                    <div class="text-center">
                        <h1 class="my-3 text-3xl font-semibold text-gray-200">Add Doctor</h1>

                    </div>
                    <div>
                        <form action="{{ url('/upload_doctor') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-6">
                                <label for="name" class="block mb-2 text-sm text-gray-200">Name</label>
                                <input type="text" name="name" placeholder="Alex Roberts" required
                                    class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            </div>
                            <div class="mb-6">
                                <label for="phone" class="block mb-2 text-sm text-gray-200">Phone</label>
                                <input type="number" name="phone" placeholder="+9400-000-000-0" required
                                    class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            </div>
                            <div class="mb-6">
                                <label for="speciality" class="block mb-2 text-sm text-gray-200">Speciality</label>
                                <select name="speciality" id=""
                                    class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300">
                                    <option>--Select--</option>
                                    <option value="skin">Skin</option>
                                    <option value="heart">Heart</option>
                                    <option value="eyes">Eyes</option>
                                    <option value="bones">Bones</option>
                                </select>
                            </div>
                            <div class="mb-6">
                                <label for="room" class="block mb-2 text-sm text-gray-200">Room No</label>
                                <input type="number" name="room" placeholder="12" required
                                    class="w-full px-3 py-2 placeholder-gray-300 border text-gray-600 border-gray-300 rounded-md  focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300" />
                            </div>
                            <div class="mb-6">
                                <label class="block mb-2 text-sm font-medium text-gray-200"
                                    for="file_input">Image</label>
                                <input
                                    class="block w-full text-sm px-3 py-2 text-gray-900 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-200 focus:outline-none dark:placeholder-gray-400"
                                    id="file_input" type="file" name="image" required>

                            </div>

                            <div class="mb-6">
                                <button type="submit"
                                    class="w-full px-2 py-2 text-white bg-violet-500 rounded-md  focus:bg-violet-600 focus:outline-none">
                                    Add
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('admin.script')

</body>

</html>