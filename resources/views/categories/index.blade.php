@extends('auth.layouts')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category List</title>

    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="font-sans bg-gray-100">

    <div class="container mx-auto">
        <h1 class="text-3xl font-bold flex justify-center items-center">Category List</h1>

        @if(session()->has('success'))
            <div class="bg-green-200 p-2 mb-4">{{ session('success') }}</div>
        @endif

        <div class="mb-3 p-3 flex justify-center items-center">
            <a href="{{ route('categories.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">Create Category</a>
            
        </div>

        <div class="flex justify-center items-center">
            <table class="table-auto border-collapse border border-gray-300">
                <thead>
                    <tr class="border-b bg-gray-200">
                        <th class="p-2">ID</th>
                        <th class="p-2">Name</th>
                        <th class="p-2">Type</th>
                        <th class="p-2">Status</th>
                        <th class="p-2">Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                        <tr class="border-b border-gray-300">
                            <td class="p-2">{{ $category->id }}</td>
                            <td class="p-2">{{ $category->name }}</td>
                            <td class="p-2">{{ $category->type }}</td>
                            <td class="p-2">{{ $category->status }}</td>
                            <td class="p-2">{{ $category->action }}</td>
                          
                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</body>
</html>
@endsection
