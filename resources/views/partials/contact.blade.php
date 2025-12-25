<section id="contact" class="py-20 px-6 relative">
    {{-- Gradient Orb --}}
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-96 h-96 bg-blue-500/10 rounded-full blur-[128px]"></div>
    
    <div class="max-w-7xl mx-auto relative">
        <div class="text-center mb-16 scroll-reveal">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4 bg-gradient-to-r from-white to-blue-200 bg-clip-text text-transparent">
                Get In Touch
            </h2>
            <p class="text-slate-400 max-w-2xl mx-auto text-lg">
                I'm currently seeking internship opportunities. Whether you have a question or just want to say hi, feel free to reach out!
            </p>
        </div>
        
        <div class="max-w-3xl mx-auto">
            {{-- Contact Information --}}
            <div class="space-y-8 mb-12 scroll-reveal">
                <div>
                    <h3 class="text-2xl font-semibold text-white mb-6 text-center">Contact Information</h3>
                    <div class="space-y-4">
                        {{-- Email --}}
                        <div class="flex items-center gap-4 text-slate-400 bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm rounded-xl p-4 border border-slate-700/50 hover:scale-105 transition-all">
                            <div class="p-3 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-xl border border-blue-500/30">
                                <i data-lucide="mail" class="text-blue-400 w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold">Email</p>
                                <a href="mailto:Jlebronjames420@gmail.com" class="hover:text-blue-400 transition-colors">
                                    Jlebronjames420@gmail.com
                                </a>
                            </div>
                        </div>
                        
                        {{-- Phone --}}
                        <div class="flex items-center gap-4 text-slate-400 bg-gradient-to-br from-slate-800/50 to-slate-900/50 backdrop-blur-sm rounded-xl p-4 border border-slate-700/50 hover:scale-105 transition-all">
                            <div class="p-3 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-xl border border-blue-500/30">
                                <i data-lucide="phone" class="text-blue-400 w-5 h-5"></i>
                            </div>
                            <div>
                                <p class="text-white font-semibold">Phone</p>
                                <p>+639 457095887</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Social Links --}}
            <div class="scroll-reveal">
                <h3 class="text-2xl font-semibold text-white mb-6 text-center">Connect With Me</h3>
                <div class="space-y-4">
                    @php
                    $socialLinks = [
                        [
                            'name' => 'GitHub',
                            'icon' => 'github',
                            'url' => 'https://github.com/LJPathay',
                            'handle' => '@LJPathay'
                        ],
                        [
                            'name' => 'LinkedIn',
                            'icon' => 'linkedin',
                            'url' => 'https://www.linkedin.com/in/lebron-james-pathay-bb42bb328/',
                            'handle' => 'in/lebron-james-pathay-bb42bb328'
                        ]
                    ];
                    @endphp
                    
                    @foreach($socialLinks as $link)
                    <a href="{{ $link['url'] }}" target="_blank" rel="noopener noreferrer" class="flex items-center gap-4 p-4 bg-gradient-to-br from-slate-800/50 to-slate-900/50 rounded-xl border border-slate-700/50 hover:border-blue-500/50 transition-all group hover:scale-105">
                        <div class="p-2 bg-gradient-to-br from-blue-500/20 to-purple-500/20 rounded-lg group-hover:from-blue-500/30 group-hover:to-purple-500/30 transition-all">
                            <i data-lucide="{{ $link['icon'] }}" class="text-blue-400 w-5 h-5"></i>
                        </div>
                        <div>
                            <p class="text-white font-semibold">{{ $link['name'] }}</p>
                            <p class="text-slate-400">{{ $link['handle'] }}</p>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
        
        {{-- Footer --}}
        <div class="mt-20 pt-8 border-t border-slate-700/50 text-center text-slate-400 scroll-reveal">
            <p>&copy; 2025 Lebron James Pathay. All rights reserved.</p>
        </div>
    </div>
</section>
