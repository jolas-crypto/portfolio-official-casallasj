@extends('layouts.app')

@section('title')
    Portfolio
@endsection

@section('content')
    <section class="container mx-auto py-16">
        <div class="bg-customPurpleSection rounded-3xl p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div>
                    Picture
                </div>
                <div class="space-y-4">
                    <h1 class="text-4xl font-bold">Hi, I am Jolas</h1>
                    <h1 class="text-6xl font-bold">Web Developer</h1>
                    <p>I design and code beautifully simple things and I love what I do. Just simple like that!</p>
                    <div>
                        <a href="#" class="bg-purple-500 hover:bg-purple-600 text-white font-medium py-2 px-4 rounded-md">Hire me!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mx-auto px-4 py-16">
        <h1 class="text-4xl font-bold mb-16">My Specialization</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="container mx-auto px-4 py-8">
                <div class="flex justify-center mb-8">
                    <div class="rounded-full bg-purple-700 p-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-11a7.5 7.5 0 0115 0v11h3.536L13.5 5.232a2.5 2.5 0 113.536 3.536z" />
                        </svg>
                    </div>
                </div>
                <div class="text-center">
                    <h1 class="text-4xl font-bold mb-4">Branding Design</h1>
                    <p class="text-lg mb-6">I break down complex user experience problems to create integrity focused solutions that connect billions of people.</p>
                    <a href="#" class="inline-block px-6 py-3 rounded-md bg-purple-700 hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-offset-2">10 Projects</a>
                </div>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-md p-8">
                <div class="flex justify-center mb-4">
                    Test
                </div>
                <h2 class="text-2xl font-bold mb-2">UI/UX Design</h2>
                <p class="text-sm text-gray-400">I break down complex user experience problems to create integrity focussed solutions that connect billions of people.</p>
                <p class="mt-4 text-gray-400 font-medium">11 PROJECTS</p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-md p-8">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 17.5V14.25a2.25 2.25 0 012.25-2.25h1.5A2.25 2.25 0 0115.75 14.25v3.25M9 10V6.75a2.25 2.25 0 012.25-2.25h1.5A2.25 2.25 0 0115.75 6.75v3.25M9 3V.75a2.25 2.25 0 012.25-2.25h1.5A2.25 2.25 0 0115.75.75v2.25" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-2">Web Design</h2>
                <p class="text-sm text-gray-400">I break down complex user experience problems to create integrity focussed solutions that connect billions of people.</p>
                <p class="mt-4 text-gray-400 font-medium">10 PROJECTS</p>
            </div>

            <div class="bg-gray-800 rounded-lg shadow-md p-8">
                <div class="flex justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4m-4 8l-4-8-4 8z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-bold mb-2">App Design</h2>
                <p class="text-sm text-gray-400">I break down complex user experience problems to create integrity focussed solutions that connect billions of people.</p>
                <p class="mt-4 text-gray-400 font-medium">15 PROJECTS</p>
            </div>
        </div>
    </section>
    <section class="container mx-auto py-16">
        <h1 class="text-4xl font-bold mb-8">Education & Work Experience</h1>
        <div class="border bg-customPurpleSection rounded-3xl p-6 border-purple-300">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h2 class="text-xl font-bold mb-4">Education</h2>
                    <ul class="list-disc ml-6">
                        <li>
                            <h3 class="text-lg font-bold mb-2">BA IN DESIGN</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">January 2024 - Present</p>
                        </li>
                        <li>
                            <h3 class="text-lg font-bold mb-2">UX/UI DESIGN SCHOOL</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">April 2024 - Present</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-xl font-bold mb-4">Experience</h2>
                    <ul class="list-disc ml-6">
                        <li>
                            <h3 class="text-lg font-bold mb-2">LION PARCEL</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">February 2024 - Present</p>
                        </li>
                        <li>
                            <h3 class="text-lg font-bold mb-2">ENVER STUDIO</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">May 2024 - Present</p>
                        </li>
                        <li>
                            <h3 class="text-lg font-bold mb-2">TOKO DISTRIBUTOR</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">March 2024 - Present</p>
                        </li>
                        <li>
                            <h3 class="text-lg font-bold mb-2">SAKOO</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">June 2024 - Present</p>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="text-xl font-bold mb-4">Past Roles</h2>
                    <ul class="list-disc ml-6">
                        <li>
                            <h3 class="text-lg font-bold mb-2">LION PARCEL</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">February 2024 - Present</p>
                        </li>
                        <li>
                            <h3 class="text-lg font-bold mb-2">ENVER STUDIO</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">May 2024 - Present</p>
                        </li>
                        <li>
                            <h3 class="text-lg font-bold mb-2">TOKO DISTRIBUTOR</h3>
                            <p class="text-sm">Product Designer</p>
                            <p class="text-sm">March 2024 - Present</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection