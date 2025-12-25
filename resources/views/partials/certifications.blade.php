@php
$certifications = [
    [
        'title' => 'IT Specialist - HTML and CSS',
        'provider' => 'Certiport - A Pearson VUE Business',
        'description' => 'Demonstrated proficiency in HTML5 and CSS3, including semantic markup, responsive design, and modern web standards.',
        'date' => 'May 2025',
        'color' => 'blue',
        'link' => 'https://www.credly.com/badges/20793434-cb1f-4f9f-858d-49135f67a1ba/linked_in_profile',
        'type' => 'Verified'
    ],
    [
        'title' => 'IT Specialist - Databases',
        'provider' => 'Certiport - A Pearson VUE Business',
        'description' => 'Validated expertise in database concepts, SQL queries, normalization, and database design principles.',
        'date' => 'March 2025',
        'color' => 'purple',
        'link' => 'https://www.credly.com/badges/71e73a85-5cfe-4eff-9a8d-5ca1e06fb4bb/linked_in_profile',
        'type' => 'Verified'
    ]
];
@endphp

<section id="certifications" class="py-20 px-6 bg-slate-900/30 relative">
    <!-- Gradient Orb -->
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-[128px]"></div>
    
    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 gradient-text">
                Certifications & Achievements
            </h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">
                Continuous learning and professional development
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-6 max-w-4xl mx-auto">
            @foreach($certifications as $index => $cert)
            <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-{{ $cert['color'] }}-500/50 transition-all hover:shadow-lg hover:shadow-{{ $cert['color'] }}-500/10 group hover:-translate-y-2 animate-fade-in-up" 
                 style="animation-delay: {{ 0.1 * $index }}s">
                <div class="flex items-start justify-between mb-4">
                    <div class="p-3 bg-gradient-to-br from-{{ $cert['color'] }}-500/20 to-purple-500/20 rounded-lg border border-{{ $cert['color'] }}-500/30 group-hover:scale-110 transition-transform">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-{{ $cert['color'] }}-400 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                        </svg>
                    </div>
                    <span class="px-3 py-1 {{ $cert['type'] === 'Verified' ? 'bg-green-500/20 text-green-400 border-green-500/50' : 'bg-blue-500/20 text-blue-400 border-blue-500/50' }} border rounded-full text-xs">
                        {{ $cert['type'] }}
                    </span>
                </div>
                <h4 class="text-lg font-semibold text-white mb-2">{{ $cert['title'] }}</h4>
                <p class="text-{{ $cert['color'] }}-400 text-sm mb-2">{{ $cert['provider'] }}</p>
                <p class="text-slate-400 text-sm mb-6">{{ $cert['description'] }}</p>
                <div class="flex items-center justify-between mt-auto pt-4 border-t border-slate-700/30">
                    <div class="flex items-center gap-1.5 text-slate-500 text-xs">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>Completed: {{ $cert['date'] }}</span>
                    </div>
                    <a href="{{ $cert['link'] }}" target="_blank" class="text-{{ $cert['color'] }}-400 hover:text-{{ $cert['color'] }}-300 flex items-center gap-1 text-xs font-medium transition-colors">
                        <span>View</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-3.5 h-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                        </svg>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
