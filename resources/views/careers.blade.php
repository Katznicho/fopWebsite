@extends('layouts.app')

@section('title', 'Careers - Fountain of Peace')

@section('content')
    <div class="pt-32 pb-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Page Header -->
            <div class="text-center mb-8">
                <h1 class="text-4xl font-bold text-gray-900">Careers at Fountain of Peace</h1>
                <p class="mt-4 text-lg text-gray-600">Join us in making a difference in the lives of children</p>
            </div>

            <!-- Job Posting Card -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                <div class="p-8">
                    <!-- Job Title Section -->
                    <div class="border-b border-gray-200 pb-6 mb-8">
                        <h2 class="text-3xl font-bold text-[#13AFD1] mb-4">Position: Chaplain</h2>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-gray-600">
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span><strong class="text-gray-900">Location:</strong> Kyenjojo, Uganda</span>
                            </div>
                            <div class="flex items-center">
                                <svg class="w-5 h-5 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span><strong class="text-gray-900">Salary:</strong> Competitive, commensurate with skills & experience</span>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-8">
                        <!-- About Section -->
                        <section>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">About Fountain of Peace</h3>
                            <div class="bg-blue-50 rounded-lg p-6 text-gray-600">
                                <p>The Fountain of Peace Children's Foundation, as a Christian charity, is guided by the teachings and values of Jesus Christ. It is dedicated to demonstrating God's love by positively impacting the lives of children under its care and the wider community.</p>
                            </div>
                        </section>

                        <!-- Role Overview -->
                        <section>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Role Overview</h3>
                            <div class="bg-gray-50 rounded-lg p-6 text-gray-600">
                                <p>As Chaplain, he or she will focus on designing and delivering discipleship programmes, providing pastoral care and counselling, and embedding strong Christian values throughout our children's homes, schools and community initiatives in alignment with the organisation's core values.</p>
                            </div>
                        </section>

                        <!-- Key Responsibilities -->
                        <section>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Key Responsibilities</h3>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><strong class="text-gray-900">Spiritual Guidance:</strong> Developing and continuously improving sustainable discipleship programs tailored to the needs of the FOP community, creating or sourcing appropriate Christian training content, implementing and evaluating age-appropriate discipleship programmes, daily devotions and Bible studies.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><strong class="text-gray-900">Pastoral Care:</strong> Offer one-on-one and group counselling, crisis support and spiritual direction, always upholding confidentiality and professional standards.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><strong class="text-gray-900">Content & Collaboration:</strong> Work closely with the CEO, principal, caregivers and other community representatives to foster a culture rooted in strong Christian values.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><strong class="text-gray-900">Caregiver Training:</strong> Lead workshops that strengthen effective, faith-based parenting skills.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <span><strong class="text-gray-900">Staff Development:</strong> Equipping caregivers with practical parenting skills to raise God-fearing children and future leaders and facilitating in-house staff counselling and training programs to address specific needs within the organization.</span>
                                </li>
                            </ul>
                        </section>

                        <!-- Qualifications -->
                        <section>
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">Qualifications & Experience</h3>
                            <ul class="space-y-4 text-gray-600">
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Bachelor's degree in Theology, Social Work, Counselling, Psychology or related field.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Minimum 3 years in a senior leadership, management or supervisory role.</span>
                                </li>
                                <li class="flex items-start">
                                    <svg class="w-6 h-6 text-[#13AFD1] mr-2 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <span>Practising Christian, passionate about children and family ministry.</span>
                                </li>
                            </ul>
                        </section>

                        <!-- Application Section -->
                        <section class="bg-gray-50 rounded-lg p-8">
                            <h3 class="text-2xl font-semibold text-gray-900 mb-4">How to Apply</h3>
                            <p class="text-gray-600 mb-6">Submit your CV, cover letter and a brief testimony of faith by <strong class="text-[#13AFD1]">9th MAY 2025</strong> to:</p>
                            <div class="flex items-center space-x-2 text-gray-600">
                                <svg class="w-5 h-5 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>Reuben Chief Guma: <a href="mailto:hr@questenergyug.co" class="text-[#13AFD1] hover:underline">hr@questenergyug.co</a></span>
                            </div>
                        </section>

                        <!-- Footer Note -->
                        <div class="mt-8 pt-6 border-t border-gray-200">
                            <p class="text-gray-600 italic text-center">FOP is an equal-opportunity employer. Only shortlisted candidates will be contacted. Join us in nurturing tomorrow's leaders!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection