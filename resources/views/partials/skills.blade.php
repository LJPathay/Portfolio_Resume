@php
$programmingLanguages = [
    ['name' => 'PHP', 'level' => 90, 'color' => 'purple', 'experience' => '2+ years', 'status' => 'Advanced'],
    ['name' => 'Node.js', 'level' => 70, 'color' => 'yellow', 'experience' => '2+ years', 'status' => 'Intermediate'],
    ['name' => 'Java', 'level' => 80, 'color' => 'red', 'experience' => '2+ years', 'status' => 'Advanced'],
    ['name' => 'Python', 'level' => 45, 'color' => 'blue', 'experience' => '1+ years', 'status' => 'Beginner']
];

$frameworks = [
    ['name' => 'Laravel', 'color' => 'red', 'level' => 'Advanced'],
    ['name' => 'Tailwind CSS', 'color' => 'cyan', 'level' => 'Advanced']
];

$databases = [
    ['name' => 'MySQL', 'level' => 75, 'color' => 'orange', 'status' => 'Intermediate'],
    ['name' => 'PostgreSQL', 'level' => 45, 'color' => 'blue', 'status' => 'Beginner']
];

$tools = [
    'Git & GitHub',
    'Docker',
    'CI/CD'
];
@endphp

<section id="skills" class="py-20 px-6 relative">
    <!-- Gradient Orb -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-blue-500/10 rounded-full blur-[128px]"></div>
    
    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16 animate-fade-in-up">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 gradient-text">
                Technical Skills
            </h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">
                Technologies and tools I work with to build powerful web applications
            </p>
        </div>
        
        <div class="max-w-5xl mx-auto space-y-12">
            <!-- Programming Languages -->
            <div class="animate-fade-in-up" style="animation-delay: 0.1s">
                <h3 class="text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                    <div class="p-2 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-lg border border-blue-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                        </svg>
                    </div>
                    Programming Languages
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($programmingLanguages as $index => $lang)
                    <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-blue-500/50 transition-all animate-fade-in-up" 
                         style="animation-delay: {{ 0.1 * $index }}s">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-white font-semibold flex items-center gap-2">
                                <span class="w-3 h-3 bg-{{ $lang['color'] }}-500 rounded"></span>
                                {{ $lang['name'] }}
                            </span>
                            <span class="text-blue-400 font-semibold">
                                {{ $lang['status'] }}
                            </span>
                        </div>
                        <div class="h-2 bg-slate-700 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-{{ $lang['color'] }}-500 to-{{ $lang['color'] === 'yellow' ? 'orange' : ($lang['color'] === 'purple' ? 'pink' : 'cyan') }}-500 rounded-full transition-all duration-1000" 
                                 style="width: {{ $lang['level'] }}%"></div>
                        </div>
                        <p class="text-slate-400 text-sm mt-2">{{ $lang['experience'] }} experience</p>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Frameworks & Libraries -->
            <div class="animate-fade-in-up" style="animation-delay: 0.2s">
                <h3 class="text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                    <div class="p-2 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-lg border border-blue-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                        </svg>
                    </div>
                    Frameworks & Libraries
                </h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    @foreach($frameworks as $index => $framework)
                    <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm rounded-xl p-4 border border-slate-700/50 hover:border-blue-500/50 transition-all text-center group cursor-default hover:scale-105 animate-fade-in-up" 
                         style="animation-delay: {{ 0.1 * $index }}s">
                        <div class="w-12 h-12 mx-auto mb-3 bg-gradient-to-br from-{{ $framework['color'] }}-500/20 to-{{ $framework['color'] === 'red' ? 'orange' : 'blue' }}-500/20 rounded-lg flex items-center justify-center group-hover:scale-110 transition-transform">
                            @if($framework['name'] === 'Laravel')
                            <svg class="text-{{ $framework['color'] }}-400 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                            </svg>
                            @else
                            <svg class="text-{{ $framework['color'] }}-400 w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01"/>
                            </svg>
                            @endif
                        </div>
                        <p class="text-white font-semibold mb-1">{{ $framework['name'] }}</p>
                        <p class="text-slate-400 text-xs">{{ $framework['level'] }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Databases -->
            <div class="animate-fade-in-up" style="animation-delay: 0.3s">
                <h3 class="text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                    <div class="p-2 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-lg border border-blue-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4"/>
                        </svg>
                    </div>
                    Databases
                </h3>
                <div class="grid md:grid-cols-2 gap-6">
                    @foreach($databases as $index => $db)
                    <div class="bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm rounded-xl p-6 border border-slate-700/50 hover:border-blue-500/50 transition-all animate-fade-in-up" 
                         style="animation-delay: {{ 0.1 * $index }}s">
                        <div class="flex items-center justify-between mb-3">
                            <span class="text-white font-semibold flex items-center gap-2">
                                <span class="w-3 h-3 bg-{{ $db['color'] }}-500 rounded"></span>
                                {{ $db['name'] }}
                            </span>
                            <span class="text-blue-400 font-semibold">
                                {{ $db['status'] }}
                            </span>
                        </div>
                        <div class="h-2 bg-slate-700 rounded-full overflow-hidden">
                            <div class="h-full bg-gradient-to-r from-{{ $db['color'] }}-500 to-{{ $db['color'] === 'orange' ? 'yellow' : 'cyan' }}-500 rounded-full transition-all duration-1000" 
                                 style="width: {{ $db['level'] }}%"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            
            <!-- Tools & DevOps -->
            <div class="animate-fade-in-up" style="animation-delay: 0.4s">
                <h3 class="text-2xl font-semibold text-white mb-6 flex items-center gap-3">
                    <div class="p-2 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-lg border border-blue-500/30">
                        <svg xmlns="http://www.w3.org/2000/svg" class="text-blue-400 w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    Tools & DevOps
                </h3>
                <div class="flex flex-wrap gap-3">
                    @foreach($tools as $index => $tool)
                    <span class="px-4 py-2 bg-slate-700/50 hover:bg-blue-500/20 text-slate-300 hover:text-white rounded-lg border border-slate-600/50 hover:border-blue-500/50 transition-all cursor-default animate-fade-in-up" 
                          style="animation-delay: {{ 0.05 * $index }}s">
                        {{ $tool }}
                    </span>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
