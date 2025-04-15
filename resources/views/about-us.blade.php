<x-layouts.app>
    <x-slot:title>关于我们 - 空手道服装商城</x-slot:title>

    <div class="container mx-auto p-4 mt-6">
        <div class="flex items-center text-sm text-gray-500 mb-6">
            <a href="{{ route('index') }}" class="hover:text-blue-600">首页</a>
            <span class="px-2">/</span>
            <span class="text-gray-700">关于我们</span>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h1 class="text-3xl font-bold mb-6 text-gray-900">关于我们</h1>

            <div class="space-y-6">
                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">我们的故事</h2>
                    <p class="text-gray-700 leading-relaxed">
                        空手道服装商城成立于2010年，由一群热爱空手道的专业人士创立。我们的创始团队都拥有多年的空手道训练经验，深知高品质装备对练习者的重要性。多年来，我们始终坚持为空手道爱好者提供最优质的装备，帮助他们在训练和比赛中取得更好的成绩。
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">我们的使命</h2>
                    <p class="text-gray-700 leading-relaxed">
                        我们的使命是为空手道爱好者提供高品质、专业级别的装备，满足从初学者到专业选手的各种需求。我们相信，优质的装备不仅能提升训练效果，还能让练习者更专注于技术的提高和心境的修炼。
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">品质承诺</h2>
                    <p class="text-gray-700 leading-relaxed">
                        我们所有产品均严格按照国际空手道联盟(WKF)的标准生产，采用最优质的材料，确保每一件产品都能经受住高强度训练的考验。我们与多家知名制造商建立了长期合作关系，从源头保证产品质量，让每一位顾客都能买到物超所值的装备。
                    </p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">服务理念</h2>
                    <p class="text-gray-700 leading-relaxed">
                        作为专业的空手道装备提供商，我们不仅销售产品，还提供专业的咨询服务。我们的团队成员都具备丰富的空手道知识，能够为顾客提供专业的建议，帮助他们选择最适合自己的装备。我们相信，只有真正了解顾客需求，才能提供最好的服务。
                    </p>
                </div>

                <div class="border-t pt-6">
                    <h2 class="text-2xl font-semibold mb-3 text-gray-800">我们的团队</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-4">
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden bg-gray-300 dark:bg-gray-700">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="张教练"
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-semibold mt-3 text-gray-800">张教练</h3>
                            <p class="text-gray-600">创始人 | 空手道七段</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden bg-gray-300 dark:bg-gray-700">
                                <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="李教练"
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-semibold mt-3 text-gray-800">李教练</h3>
                            <p class="text-gray-600">产品总监 | 空手道五段</p>
                        </div>
                        <div class="text-center">
                            <div class="w-32 h-32 mx-auto rounded-full overflow-hidden bg-gray-300">
                                <img src="https://randomuser.me/api/portraits/men/33.jpg" alt="王经理"
                                     class="w-full h-full object-cover">
                            </div>
                            <h3 class="text-xl font-semibold mt-3 text-gray-800">王经理</h3>
                            <p class="text-gray-600">客户服务总监 | 空手道四段</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layouts.app>