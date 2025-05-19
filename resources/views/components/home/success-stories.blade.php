<section class="py-16 bg-white">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Updates</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">Stay informed about our latest news, achievements, and developments at Fountain of Peace</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Award Winners Card -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 ease-in-out" x-data="{ isExpanded: false }">
                <div class="h-80 bg-white flex items-center justify-center">
                    <img src="{{ asset('images/award.png') }}" alt="Award Winners" class="h-72 w-auto">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Award Winners</h3>
                    <div x-show="!isExpanded" class="relative">
                        <p class="text-gray-600 line-clamp-4">We are greatly honoured to receive this award for the tremendous work done at Fountain of Peace Children's Foundation. Our heartfelt thanks to Rotary Club Bunga for this recognition, which represents the collective efforts of our dedicated team, volunteers, donors, and supporters...</p>
                        <button @click="isExpanded = true" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium mt-2">Read More</button>
                    </div>
                    <div x-show="isExpanded" x-cloak>
                        <p class="text-gray-600">We are greatly honoured to receive this award for the tremendous work done at Fountain of Peace Children's Foundation. Our heartfelt thanks to Rotary Club Bunga for this recognition, which represents the collective efforts of our dedicated team, volunteers, donors, and supporters. As we continue our mission to rescue, nurture and empower children in need, this award reminds us of the inspiring stories that drive our commitment. While we celebrate this achievement, we recognize that our work is ongoing. Let us reaffirm our dedication to spreading hope and fostering meaningful change. Thank you for this honour, and let's continue making a difference together.</p>
                        <button @click="isExpanded = false" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium mt-2">Read Less</button>
                    </div>
                </div>
            </div>

            <!-- Meet Patrick Card -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 ease-in-out" x-data="{ isExpanded: false }">
                <div class="h-80">
                    <img src="{{ asset('images/patrick.JPG') }}" alt="Meet Patrick" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Meet Patrick</h3>
                    <div x-show="!isExpanded" class="relative">
                        <p class="text-gray-600 line-clamp-4">On March 5th, Fountain of Peace responded to a call from Kyenjojo District's Senior Probation and Social Welfare Officer about Baby Patrick, a three-week-old infant in need of alternative care after his mother, Annet Kebirungi, passed away...</p>
                        <button @click="isExpanded = true" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium mt-2">Read More</button>
                    </div>
                    <div x-show="isExpanded" x-cloak>
                        <p class="text-gray-600 mb-4">On March 5th, Fountain of Peace responded to a call from Kyenjojo District's Senior Probation and Social Welfare Officer about Baby Patrick, a three-week-old infant in need of alternative care after his mother, Annet Kebirungi, passed away on March 1st due to a sudden illness. Annet left behind six children under the care of their father, Chris, who was overwhelmed by the responsibility, prompting intervention. Upon arrival, Baby Patrick was healthy, weighing 3.6 kg and feeding well. Fountain of Peace welcomed Patrick as our newest baby, providing him with care and support and ensuring a safe and nurturing environment where he can thrive.</p>
                        <p class="text-gray-600 mb-4">Thank you for your interest in Patrick's story. Together, we can make a difference in the lives of more children like him.</p>
                        <p class="text-gray-600">
                            <a href="https://sponsorship.fopinternational.org/rescuePermonth" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium">Click here</a> to support our rescue mission.
                        </p>
                        <button @click="isExpanded = false" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium mt-2">Read Less</button>
                    </div>
                </div>
            </div>

            <!-- ACE Curriculum Card -->
            <div class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 ease-in-out" x-data="{ isExpanded: false }">
                <div class="h-80">
                    <img src="{{ asset('images/student.jpg') }}" alt="ACE Curriculum" class="w-full h-full object-cover">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold mb-2">Introducing the ACE Curriculum</h3>
                    <div x-show="!isExpanded" class="relative">
                        <p class="text-gray-600 line-clamp-4">We are thrilled to announce the introduction of the Accelerated Christian Education (ACE) curriculum at Rwenjaza Hillside School! This innovative and dynamic curriculum represents a significant step forward...</p>
                        <button @click="isExpanded = true" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium mt-2">Read More</button>
                    </div>
                    <div x-show="isExpanded" x-cloak>
                        <p class="text-gray-600 mb-4">We are thrilled to announce the introduction of the Accelerated Christian Education (ACE) curriculum at Rwenjaza Hillside School! This innovative and dynamic curriculum represents a significant step forward in our commitment to providing an exceptional educational experience for our students and the community. The ACE curriculum is designed to cater to the individual learning needs of each student, fostering a personalized and self-paced educational journey. By emphasizing character development, responsibility, and academic excellence, ACE prepares students for academic success and life beyond the classroom.</p>
                        <p class="text-gray-600 mb-4">Thank you for your support in bringing quality education to our community.</p>
                        <p class="text-gray-600">
                            <a href="https://sponsorship.fopinternational.org/donate" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium">Click here</a> to support our educational initiatives.
                        </p>
                        <button @click="isExpanded = false" class="text-[#13AFD1] hover:text-[#0F8FA8] font-medium mt-2">Read Less</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>