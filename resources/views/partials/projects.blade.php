<section id="projects" class="py-20 px-6 bg-slate-900/30 relative">
    {{-- Gradient Orb --}}
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-purple-500/10 rounded-full blur-[128px]"></div>
    
    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 bg-gradient-to-r from-white to-purple-200 bg-clip-text text-transparent">
                Projects
            </h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">
                A collection of my recent work showcasing my expertise in back-end development and web technologies. Each project demonstrates problem-solving skills and technical proficiency.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 items-stretch">
            @php
            $projects = [
                [
                    'title' => 'Brgy 12 Health Center Management System',
                    'description' => 'A comprehensive healthcare management platform (IT12) for local health centers, featuring patient records, appointment scheduling, and health analytics.',
                    'image' => 'images/it12.PNG',
                    'technologies' => ['Laravel', 'PostgreSQL', 'Alpine.js', 'Chart.js'],
                    'github' => 'https://github.com/LJPathay/it12_project',
                    'status' => 'Completed'
                ],
                [
                    'title' => 'Brgy 11 MALASAKIT Clinic’s System',
                    'description' => 'Sophisticated clinic management system (IT13) utilizing a hybrid database approach with local MySQL and online Supabase integration.',
                    'image' => 'images/sample_for_it13.PNG',
                    'technologies' => ['C#', '.NET', 'MySQL', 'Supabase'],
                    'github' => 'https://github.com/LJPathay/IT13_Project',
                    'status' => 'Completed'
                ],
                [
                    'title' => 'Library Information System',
                    'description' => 'A streamlined digital library management platform (IT9) designed to track book inventory, member borrowings, and circulation records.',
                    'image' => 'images/it9.PNG',
                    'technologies' => ['Laravel', 'PHP', 'MySQL', 'Database Design'],
                    'github' => 'https://github.com/LJPathay/IT9_Project',
                    'status' => 'Completed'
                ],
                [
                    'title' => 'Python Physics Simulation',
                    'description' => 'A specialized simulation tool for Projectile Motion, developed for College Physics 1 to visualize complex mathematical concepts.',
                    'image' => 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?q=80&w=2070',
                    'technologies' => ['Python', 'Matplotlib', 'Physics Logic'],
                    'github' => 'https://github.com/LJPathay/PHYS101-L',
                    'status' => 'Completed'
                ],
                [
                    'title' => 'AHLuTANG Loaning Application',
                    'description' => 'A cross-platform mobile application developed for the CCE106 course, demonstrating modern UI components and state management.',
                    'image' => 'https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?q=80&w=2070',
                    'technologies' => ['Flutter', 'Dart', 'Mobile Dev'],
                    'github' => 'https://github.com/LJPathay/CCE106_Project',
                    'status' => 'Completed'
                ]
            ];
            @endphp
            
            @foreach($projects as $project)
            <div class="flex group scroll-reveal">
                <div class="flex flex-col w-full bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm rounded-2xl overflow-hidden border border-slate-700/50 hover:border-blue-500/50 transition-all hover:-translate-y-2">
                    <div class="relative h-48 overflow-hidden">
                        <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/50 to-transparent"></div>
                        <div class="absolute top-4 right-4">
                            @php
                                $statusConfig = [
                                    'Completed' => [
                                        'class' => 'bg-emerald-950/80 text-emerald-400 border-emerald-500/50',
                                        'icon' => 'check-circle'
                                    ],
                                    'Current' => [
                                        'class' => 'bg-amber-950/80 text-amber-400 border-amber-500/50 animate-pulse',
                                        'icon' => 'loader'
                                    ],
                                    'Production' => [
                                        'class' => 'bg-blue-950/80 text-blue-400 border-blue-500/50',
                                        'icon' => 'globe'
                                    ]
                                ];
                                $currentStatus = $project['status'] ?? 'Completed';
                                $config = $statusConfig[$currentStatus] ?? $statusConfig['Completed'];
                            @endphp
                            <span class="flex items-center gap-1.5 px-3 py-1 rounded-full backdrop-blur-md border text-xs font-medium {{ $config['class'] }}">
                                <i data-lucide="{{ $config['icon'] }}" class="w-3 h-3"></i>
                                {{ $currentStatus }}
                            </span>
                        </div>
                    </div>
                    
                    <div class="p-6 flex flex-col flex-grow">
                        <div class="mb-6">
                            <h3 class="text-xl font-semibold text-white mb-2 leading-tight min-h-[3.5rem] flex items-start">{{ $project['title'] }}</h3>
                            <p class="text-slate-400 text-sm leading-relaxed min-h-[4.5rem] line-clamp-3">{{ $project['description'] }}</p>
                        </div>
                        
                        <div class="mt-auto space-y-6">
                            <div class="flex flex-wrap gap-2 min-h-[50px] content-start">
                                @foreach($project['technologies'] as $tech)
                                <span class="px-2.5 py-1 text-xs bg-slate-700/50 text-slate-300 rounded-md border border-slate-600/50">
                                    {{ $tech }}
                                </span>
                                @endforeach
                            </div>
                            
                            <div class="flex gap-4 pt-4 border-t border-slate-700/30">
                                @if(isset($project['github']) && $project['github'])
                                <a href="{{ $project['github'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-slate-400 hover:text-white transition-colors group/link text-sm">
                                    <i data-lucide="github" class="w-4 h-4 group-hover/link:scale-110 transition-transform"></i>
                                    <span>Code</span>
                                </a>
                                @endif
                                @if(isset($project['live']) && $project['live'])
                                <a href="{{ $project['live'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-slate-400 hover:text-white transition-colors group/link text-sm">
                                    <i data-lucide="external-link" class="w-4 h-4 group-hover/link:scale-110 transition-transform"></i>
                                    <span>Live</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
