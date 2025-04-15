<?php

namespace App\Livewire;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class LanguageSwitcher extends Component
{
    public $currentLocale;

    public function mount(): void
    {
        $this->currentLocale = app()->getLocale();
    }

    public function updatedCurrentLocale($currentLocale): void
    {
        $this->changeLanguage($currentLocale);
    }

    public function changeLanguage($locale)
    {
        // 验证语言是否有效
        if (! in_array($locale, ['zh-CN', 'en'])) {
            abort(400);
        }

        // 更新 Session 和全局配置
        session()->put('locale', $locale);
        app()->setLocale($locale);

        // 更新当前组件状态（可选）
        $this->currentLocale = $locale;

        // 重新加载页面以应用翻译（或动态更新内容）
        $this->redirect(URL::previous(fallback: route('index')), navigate: true);
    }

    public function render(): View
    {
        return view('livewire.language-switcher');
    }
}
