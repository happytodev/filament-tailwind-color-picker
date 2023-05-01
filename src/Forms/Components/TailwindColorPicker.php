<?php

namespace HappyToDev\FilamentTailwindColorPicker\Forms\Components;

use Filament\Forms\Components\Concerns\HasPlaceholder;
use Filament\Forms\Components\Field;
use Filament\Support\Concerns\HasExtraAlpineAttributes;

class TailwindColorPicker extends Field
{
    use HasPlaceholder;
    use HasExtraAlpineAttributes;

    protected string $view = 'filament-tailwind-color-picker::forms.components.tailwind-color-picker';

    protected $isOpen = false;

    public $colorSelected;

    public $colorSelectedHex;

    public $bgColorSelected = '';

    public $scope = '';

    public $colorsOpacityActivated = false;

    public $colorsOpacity50 = [
        // Slate
        ['hex' => '#64748b', 'twLabel' => 'slate-500/50', 'twBgLabel' => 'bg-slate-500/50', 'twTextLabel' => 'text-slate-500/50'],

        // Gray
        ['hex' => '#6b7280', 'twLabel' => 'gray-500/50',  'twBgLabel' => 'bg-gray-500/50',  'twTextLabel' => 'text-gray-500/50'],

        // Zinc
        ['hex' => '#71717a', 'twLabel' => 'zinc-500/50',  'twBgLabel' => 'bg-zinc-500/50',  'twTextLabel' => 'text-zinc-500/50'],

        // Neutral
        ['hex' => '#737373', 'twLabel' => 'neutral-500/50', 'twBgLabel' => 'bgNeutral-500/50', 'twTextLabel' => 'text-neutral-500/50'],

        // Stone
        ['hex' => '#78716c', 'twLabel' => 'stone-500/50', 'twBgLabel' => 'bg-stone-500/50', 'twTextLabel' => 'text-stone-500/50'],

        // Red
        ['hex' => '#ef4444', 'twLabel' => 'red-500/50', 'twBgLabel' => 'bg-red-500/50', 'twTextLabel' => 'text-red-500/50'],

        ['hex' => '#ef4444', 'twLabel' => 'red-500/20', 'twBgLabel' => 'bg-red-500/20', 'twTextLabel' => 'text-red-500/20'],

        // Orange
        ['hex' => '#f97316', 'twLabel' => 'orange-500/50', 'twBgLabel' => 'bg-orange-500/50', 'twTextLabel' => 'text-orange-500/50'],

        // Amber
        ['hex' => '#f59e0b', 'twLabel' => 'amber-500/50', 'twBgLabel' => 'bg-amber-500/50', 'twTextLabel' => 'text-amber-500/50'],

        // Yellow
        ['hex' => '#eab308', 'twLabel' => 'yellow-500/50', 'twBgLabel' => 'bg-yellow-500/50', 'twTextLabel' => 'text-yellow-500/50'],

        // Green
        ['hex' => '#22c55e', 'twLabel' => 'green-500/50', 'twBgLabel' => 'bg-green-500/50', 'twTextLabel' => 'text-green-500/50'],

        // Emerald
        ['hex' => '#10b981', 'twLabel' => 'emerald-500/50', 'twBgLabel' => 'bg-emerald-500/50', 'twTextLabel' => 'text-emerald-500/50'],

        // Teal
        ['hex' => '#14b8a6', 'twLabel' => 'teal-500/50', 'twBgLabel' => 'bg-teal-500/50', 'twTextLabel' => 'text-teal-500/50'],

        // Cyan
        ['hex' => '#06b6d4', 'twLabel' => 'cyan-500/50', 'twBgLabel' => 'bg-cyan-500/50', 'twTextLabel' => 'text-cyan-500/50'],

        // Sky
        ['hex' => '#0ea5e9', 'twLabel' => 'sky-500/50', 'twBgLabel' => 'bg-sky-500/50', 'twTextLabel' => 'text-sky-500/50'],

        // Blue
        ['hex' => '#3b82f6', 'twLabel' => 'blue-500/50', 'twBgLabel' => 'bg-blue-500/50', 'twTextLabel' => 'text-blue-500/50'],

        // Indigo
        ['hex' => '#6366f1', 'twLabel' => 'indigo-500/50', 'twBgLabel' => 'bg-indigo-500/50', 'twTextLabel' => 'text-indigo-500/50'],

        // Violet
        ['hex' => '#8b5cf6', 'twLabel' => 'violet-500/50', 'twBgLabel' => 'bg-violet-500/50', 'twTextLabel' => 'text-violet-500/50'],

        // Purple
        ['hex' => '#a855f7', 'twLabel' => 'purple-500/50', 'twBgLabel' => 'bg-purple-500/50', 'twTextLabel' => 'text-purple-500/50'],

        // Fuschia
        ['hex' => '#d946ef', 'twLabel' => 'fuchsia-500/50', 'twBgLabel' => 'bg-fuchsia-500/50', 'twTextLabel' => 'text-fuchsia-500/50'],

        // Pink
        ['hex' => '#ec4899', 'twLabel' => 'pink-500/50', 'twBgLabel' => 'bg-pink-500/50', 'twTextLabel' => 'text-pink-500/50'],

        // Pink
        ['hex' => '#f43f5e', 'twLabel' => 'rose-500/50', 'twBgLabel' => 'bg-rose-500/50', 'twTextLabel' => 'text-rose-500/50'],

        // black, white, transparent
        ['hex' => '#ffffff', 'twLabel' => 'white/50', 'twBgLabel' => 'bg-white/50', 'twTextLabel' => 'text-white/50'],
        ['hex' => '#000000', 'twLabel' => 'black/50',  'twBgLabel' => 'bg-black/50',  'twTextLabel' => 'text-black/50'],
        ['hex' => '#ffffffff', 'twLabel' => 'transparent',  'twBgLabel' => 'bg-transparent',  'twTextLabel' => 'text-transparent'],
    ];

    public $colors = [

        // Slate
        ['hex' => '#f8fafc', 'twLabel' => 'slate-50',  'twBgLabel' => 'bg-slate-50',  'twFillLabel' => 'fill-slate-50', 'twTextLabel' => 'text-slate-50'],
        ['hex' => '#f1f5f9', 'twLabel' => 'slate-100', 'twBgLabel' => 'bg-slate-100', 'twFillLabel' => 'fill-slate-100', 'twTextLabel' => 'text-slate-100'],
        ['hex' => '#e2e8f0', 'twLabel' => 'slate-200', 'twBgLabel' => 'bg-slate-200', 'twFillLabel' => 'fill-slate-200', 'twTextLabel' => 'text-slate-200'],
        ['hex' => '#cbd5e1', 'twLabel' => 'slate-300', 'twBgLabel' => 'bg-slate-300', 'twFillLabel' => 'fill-slate-300', 'twTextLabel' => 'text-slate-300'],
        ['hex' => '#94a3b8', 'twLabel' => 'slate-400', 'twBgLabel' => 'bg-slate-400', 'twFillLabel' => 'fill-slate-400', 'twTextLabel' => 'text-slate-400'],
        ['hex' => '#64748b', 'twLabel' => 'slate-500', 'twBgLabel' => 'bg-slate-500', 'twFillLabel' => 'fill-slate-500', 'twTextLabel' => 'text-slate-500'],
        ['hex' => '#475569', 'twLabel' => 'slate-600', 'twBgLabel' => 'bg-slate-600', 'twFillLabel' => 'fill-slate-600', 'twTextLabel' => 'text-slate-600'],
        ['hex' => '#334155', 'twLabel' => 'slate-700', 'twBgLabel' => 'bg-slate-700', 'twFillLabel' => 'fill-slate-700', 'twTextLabel' => 'text-slate-700'],
        ['hex' => '#1e293b', 'twLabel' => 'slate-800', 'twBgLabel' => 'bg-slate-800', 'twFillLabel' => 'fill-slate-800', 'twTextLabel' => 'text-slate-800'],
        ['hex' => '#0f172a', 'twLabel' => 'slate-900', 'twBgLabel' => 'bg-slate-900', 'twFillLabel' => 'fill-slate-900', 'twTextLabel' => 'text-slate-900'],

        // Gray
        ['hex' => '#f9fafb', 'twLabel' => 'gray-50',   'twBgLabel' => 'bg-gray-50',   'twFillLabel' => 'fill-gray-50', 'twTextLabel' => 'text-gray-50'],
        ['hex' => '#f3f4f6', 'twLabel' => 'gray-100',  'twBgLabel' => 'bg-gray-100',  'twFillLabel' => 'fill-gray-100', 'twTextLabel' => 'text-gray-100'],
        ['hex' => '#e5e7eb', 'twLabel' => 'gray-200',  'twBgLabel' => 'bg-gray-200',  'twFillLabel' => 'fill-gray-200', 'twTextLabel' => 'text-gray-200'],
        ['hex' => '#d1d5db', 'twLabel' => 'gray-300',  'twBgLabel' => 'bg-gray-300',  'twFillLabel' => 'fill-gray-300', 'twTextLabel' => 'text-gray-300'],
        ['hex' => '#9ca3af', 'twLabel' => 'gray-400',  'twBgLabel' => 'bg-gray-400',  'twFillLabel' => 'fill-gray-400', 'twTextLabel' => 'text-gray-400'],
        ['hex' => '#6b7280', 'twLabel' => 'gray-500',  'twBgLabel' => 'bg-gray-500',  'twFillLabel' => 'fill-gray-500', 'twTextLabel' => 'text-gray-500'],
        ['hex' => '#4b5563', 'twLabel' => 'gray-600',  'twBgLabel' => 'bg-gray-600',  'twFillLabel' => 'fill-gray-600', 'twTextLabel' => 'text-gray-600'],
        ['hex' => '#374151', 'twLabel' => 'gray-700',  'twBgLabel' => 'bg-gray-700',  'twFillLabel' => 'fill-gray-700', 'twTextLabel' => 'text-gray-700'],
        ['hex' => '#1f2937', 'twLabel' => 'gray-800',  'twBgLabel' => 'bg-gray-800',  'twFillLabel' => 'fill-gray-800', 'twTextLabel' => 'text-gray-800'],
        ['hex' => '#111827', 'twLabel' => 'gray-900',  'twBgLabel' => 'bg-gray-900',  'twFillLabel' => 'fill-gray-900', 'twTextLabel' => 'text-gray-900'],

        // Zinc
        ['hex' => '#fafafa', 'twLabel' => 'zinc-50',   'twBgLabel' => 'bg-zinc-50',   'twFillLabel' => 'fill-zinc-50', 'twTextLabel' => 'text-zinc-50'],
        ['hex' => '#f4f4f5', 'twLabel' => 'zinc-100',  'twBgLabel' => 'bg-zinc-100',  'twFillLabel' => 'fill-zinc-100', 'twTextLabel' => 'text-zinc-100'],
        ['hex' => '#e4e4e7', 'twLabel' => 'zinc-200',  'twBgLabel' => 'bg-zinc-200',  'twFillLabel' => 'fill-zinc-200', 'twTextLabel' => 'text-zinc-200'],
        ['hex' => '#d4d4d8', 'twLabel' => 'zinc-300',  'twBgLabel' => 'bg-zinc-300',  'twFillLabel' => 'fill-zinc-300', 'twTextLabel' => 'text-zinc-300'],
        ['hex' => '#a1a1aa', 'twLabel' => 'zinc-400',  'twBgLabel' => 'bg-zinc-400',  'twFillLabel' => 'fill-zinc-400', 'twTextLabel' => 'text-zinc-400'],
        ['hex' => '#71717a', 'twLabel' => 'zinc-500',  'twBgLabel' => 'bg-zinc-500',  'twFillLabel' => 'fill-zinc-500', 'twTextLabel' => 'text-zinc-500'],
        ['hex' => '#52525b', 'twLabel' => 'zinc-600',  'twBgLabel' => 'bg-zinc-600',  'twFillLabel' => 'fill-zinc-600', 'twTextLabel' => 'text-zinc-600'],
        ['hex' => '#3f3f46', 'twLabel' => 'zinc-700',  'twBgLabel' => 'bg-zinc-700',  'twFillLabel' => 'fill-zinc-700', 'twTextLabel' => 'text-zinc-700'],
        ['hex' => '#27272a', 'twLabel' => 'zinc-800',  'twBgLabel' => 'bg-zinc-800',  'twFillLabel' => 'fill-zinc-800', 'twTextLabel' => 'text-zinc-800'],
        ['hex' => '#18181b', 'twLabel' => 'zinc-900',  'twBgLabel' => 'bg-zinc-900',  'twFillLabel' => 'fill-zinc-900', 'twTextLabel' => 'text-zinc-900'],

        // Neutral
        ['hex' => '#fafafa', 'twLabel' => 'neutral-50', 'twBgLabel' => 'bg-neutral-50',   'twFillLabel' => 'fill-neutral-50', 'twTextLabel' => 'text-neutral-50'],
        ['hex' => '#f5f5f5', 'twLabel' => 'neutral-100', 'twBgLabel' => 'bg-neutral-100', 'twFillLabel' => 'fill-neutral-100', 'twTextLabel' => 'text-neutral-100'],
        ['hex' => '#e5e5e5', 'twLabel' => 'neutral-200', 'twBgLabel' => 'bg-neutral-200', 'twFillLabel' => 'fill-neutral-200', 'twTextLabel' => 'text-neutral-200'],
        ['hex' => '#d4d4d4', 'twLabel' => 'neutral-300', 'twBgLabel' => 'bg-neutral-300', 'twFillLabel' => 'fill-neutral-300', 'twTextLabel' => 'text-neutral-300'],
        ['hex' => '#a3a3a3', 'twLabel' => 'neutral-400', 'twBgLabel' => 'bg-neutral-400', 'twFillLabel' => 'fill-neutral-400', 'twTextLabel' => 'text-neutral-400'],
        ['hex' => '#737373', 'twLabel' => 'neutral-500', 'twBgLabel' => 'bg-neutral-500', 'twFillLabel' => 'fill-neutral-500', 'twTextLabel' => 'text-neutral-500'],
        ['hex' => '#525252', 'twLabel' => 'neutral-600', 'twBgLabel' => 'bg-neutral-600', 'twFillLabel' => 'fill-neutral-600', 'twTextLabel' => 'text-neutral-600'],
        ['hex' => '#404040', 'twLabel' => 'neutral-700', 'twBgLabel' => 'bg-neutral-700', 'twFillLabel' => 'fill-neutral-700', 'twTextLabel' => 'text-neutral-700'],
        ['hex' => '#262626', 'twLabel' => 'neutral-800', 'twBgLabel' => 'bg-neutral-800', 'twFillLabel' => 'fill-neutral-800', 'twTextLabel' => 'text-neutral-800'],
        ['hex' => '#171717', 'twLabel' => 'neutral-900', 'twBgLabel' => 'bg-neutral-900', 'twFillLabel' => 'fill-neutral-900', 'twTextLabel' => 'text-neutral-900'],

        // Stone
        ['hex' => '#fafaf9', 'twLabel' => 'stone-50',  'twBgLabel' => 'bg-stone-50',  'twFillLabel' => 'fill-stone-50', 'twTextLabel' => 'text-stone-50'],
        ['hex' => '#f5f5f4', 'twLabel' => 'stone-100', 'twBgLabel' => 'bg-stone-100', 'twFillLabel' => 'fill-stone-100', 'twTextLabel' => 'text-stone-100'],
        ['hex' => '#e7e5e4', 'twLabel' => 'stone-200', 'twBgLabel' => 'bg-stone-200', 'twFillLabel' => 'fill-stone-200', 'twTextLabel' => 'text-stone-200'],
        ['hex' => '#d6d3d1', 'twLabel' => 'stone-300', 'twBgLabel' => 'bg-stone-300', 'twFillLabel' => 'fill-stone-300', 'twTextLabel' => 'text-stone-300'],
        ['hex' => '#a8a29e', 'twLabel' => 'stone-400', 'twBgLabel' => 'bg-stone-400', 'twFillLabel' => 'fill-stone-400', 'twTextLabel' => 'text-stone-400'],
        ['hex' => '#78716c', 'twLabel' => 'stone-500', 'twBgLabel' => 'bg-stone-500', 'twFillLabel' => 'fill-stone-500', 'twTextLabel' => 'text-stone-500'],
        ['hex' => '#57534e', 'twLabel' => 'stone-600', 'twBgLabel' => 'bg-stone-600', 'twFillLabel' => 'fill-stone-600', 'twTextLabel' => 'text-stone-600'],
        ['hex' => '#44403c', 'twLabel' => 'stone-700', 'twBgLabel' => 'bg-stone-700', 'twFillLabel' => 'fill-stone-700', 'twTextLabel' => 'text-stone-700'],
        ['hex' => '#292524', 'twLabel' => 'stone-800', 'twBgLabel' => 'bg-stone-800', 'twFillLabel' => 'fill-stone-800', 'twTextLabel' => 'text-stone-800'],
        ['hex' => '#1c1917', 'twLabel' => 'stone-900', 'twBgLabel' => 'bg-stone-900', 'twFillLabel' => 'fill-stone-900', 'twTextLabel' => 'text-stone-900'],

        // Red
        ['hex' => '#fef2f2', 'twLabel' => 'red-50',  'twBgLabel' => 'bg-red-50',  'twFillLabel' => 'fill-red-50', 'twTextLabel' => 'text-red-50'],
        ['hex' => '#fee2e2', 'twLabel' => 'red-100', 'twBgLabel' => 'bg-red-100', 'twFillLabel' => 'fill-red-100', 'twTextLabel' => 'text-red-100'],
        ['hex' => '#fecaca', 'twLabel' => 'red-200', 'twBgLabel' => 'bg-red-200', 'twFillLabel' => 'fill-red-200', 'twTextLabel' => 'text-red-200'],
        ['hex' => '#fca5a5', 'twLabel' => 'red-300', 'twBgLabel' => 'bg-red-300', 'twFillLabel' => 'fill-red-300', 'twTextLabel' => 'text-red-300'],
        ['hex' => '#f87171', 'twLabel' => 'red-400', 'twBgLabel' => 'bg-red-400', 'twFillLabel' => 'fill-red-400', 'twTextLabel' => 'text-red-400'],
        ['hex' => '#ef4444', 'twLabel' => 'red-500', 'twBgLabel' => 'bg-red-500', 'twFillLabel' => 'fill-red-500', 'twTextLabel' => 'text-red-500'],
        ['hex' => '#dc2626', 'twLabel' => 'red-600', 'twBgLabel' => 'bg-red-600', 'twFillLabel' => 'fill-red-600', 'twTextLabel' => 'text-red-600'],
        ['hex' => '#b91c1c', 'twLabel' => 'red-700', 'twBgLabel' => 'bg-red-700', 'twFillLabel' => 'fill-red-700', 'twTextLabel' => 'text-red-700'],
        ['hex' => '#991b1b', 'twLabel' => 'red-800', 'twBgLabel' => 'bg-red-800', 'twFillLabel' => 'fill-red-800', 'twTextLabel' => 'text-red-800'],
        ['hex' => '#7f1d1d', 'twLabel' => 'red-900', 'twBgLabel' => 'bg-red-900', 'twFillLabel' => 'fill-red-900', 'twTextLabel' => 'text-red-900'],

        // Orange
        ['hex' => '#fff7ed', 'twLabel' => 'orange-50',  'twBgLabel' => 'bg-orange-50',  'twFillLabel' => 'fill-orange-50', 'twTextLabel' => 'text-orange-50'],
        ['hex' => '#ffedd5', 'twLabel' => 'orange-100', 'twBgLabel' => 'bg-orange-100', 'twFillLabel' => 'fill-orange-100', 'twTextLabel' => 'text-orange-100'],
        ['hex' => '#fed7aa', 'twLabel' => 'orange-200', 'twBgLabel' => 'bg-orange-200', 'twFillLabel' => 'fill-orange-200', 'twTextLabel' => 'text-orange-200'],
        ['hex' => '#fdba74', 'twLabel' => 'orange-300', 'twBgLabel' => 'bg-orange-300', 'twFillLabel' => 'fill-orange-300', 'twTextLabel' => 'text-orange-300'],
        ['hex' => '#fb923c', 'twLabel' => 'orange-400', 'twBgLabel' => 'bg-orange-400', 'twFillLabel' => 'fill-orange-400', 'twTextLabel' => 'text-orange-400'],
        ['hex' => '#f97316', 'twLabel' => 'orange-500', 'twBgLabel' => 'bg-orange-500', 'twFillLabel' => 'fill-orange-500', 'twTextLabel' => 'text-orange-500'],
        ['hex' => '#ea580c', 'twLabel' => 'orange-600', 'twBgLabel' => 'bg-orange-600', 'twFillLabel' => 'fill-orange-600', 'twTextLabel' => 'text-orange-600'],
        ['hex' => '#c2410c', 'twLabel' => 'orange-700', 'twBgLabel' => 'bg-orange-700', 'twFillLabel' => 'fill-orange-700', 'twTextLabel' => 'text-orange-700'],
        ['hex' => '#9a3412', 'twLabel' => 'orange-800', 'twBgLabel' => 'bg-orange-800', 'twFillLabel' => 'fill-orange-800', 'twTextLabel' => 'text-orange-800'],
        ['hex' => '#7c2d12', 'twLabel' => 'orange-900', 'twBgLabel' => 'bg-orange-900', 'twFillLabel' => 'fill-orange-900', 'twTextLabel' => 'text-orange-900'],

        // Amber
        ['hex' => '#fffbeb', 'twLabel' => 'amber-50',  'twBgLabel' => 'bg-amber-50',  'twFillLabel' => 'fill-amber-50', 'twTextLabel' => 'text-amber-50'],
        ['hex' => '#fef3c7', 'twLabel' => 'amber-100', 'twBgLabel' => 'bg-amber-100', 'twFillLabel' => 'fill-amber-100', 'twTextLabel' => 'text-amber-100'],
        ['hex' => '#fde68a', 'twLabel' => 'amber-200', 'twBgLabel' => 'bg-amber-200', 'twFillLabel' => 'fill-amber-200', 'twTextLabel' => 'text-amber-200'],
        ['hex' => '#fcd34d', 'twLabel' => 'amber-300', 'twBgLabel' => 'bg-amber-300', 'twFillLabel' => 'fill-amber-300', 'twTextLabel' => 'text-amber-300'],
        ['hex' => '#fbbf24', 'twLabel' => 'amber-400', 'twBgLabel' => 'bg-amber-400', 'twFillLabel' => 'fill-amber-400', 'twTextLabel' => 'text-amber-400'],
        ['hex' => '#f59e0b', 'twLabel' => 'amber-500', 'twBgLabel' => 'bg-amber-500', 'twFillLabel' => 'fill-amber-500', 'twTextLabel' => 'text-amber-500'],
        ['hex' => '#d97706', 'twLabel' => 'amber-600', 'twBgLabel' => 'bg-amber-600', 'twFillLabel' => 'fill-amber-600', 'twTextLabel' => 'text-amber-600'],
        ['hex' => '#b45309', 'twLabel' => 'amber-700', 'twBgLabel' => 'bg-amber-700', 'twFillLabel' => 'fill-amber-700', 'twTextLabel' => 'text-amber-700'],
        ['hex' => '#92400e', 'twLabel' => 'amber-800', 'twBgLabel' => 'bg-amber-800', 'twFillLabel' => 'fill-amber-800', 'twTextLabel' => 'text-amber-800'],
        ['hex' => '#78350f', 'twLabel' => 'amber-900', 'twBgLabel' => 'bg-amber-900', 'twFillLabel' => 'fill-amber-900', 'twTextLabel' => 'text-amber-900'],

        // Yellow
        ['hex' => '#fefce8', 'twLabel' => 'yellow-50',  'twBgLabel' => 'bg-yellow-50',  'twFillLabel' => 'fill-yellow-50', 'twTextLabel' => 'text-yellow-50'],
        ['hex' => '#fef9c3', 'twLabel' => 'yellow-100', 'twBgLabel' => 'bg-yellow-100', 'twFillLabel' => 'fill-yellow-100', 'twTextLabel' => 'text-yellow-100'],
        ['hex' => '#fef08a', 'twLabel' => 'yellow-200', 'twBgLabel' => 'bg-yellow-200', 'twFillLabel' => 'fill-yellow-200', 'twTextLabel' => 'text-yellow-200'],
        ['hex' => '#fde047', 'twLabel' => 'yellow-300', 'twBgLabel' => 'bg-yellow-300', 'twFillLabel' => 'fill-yellow-300', 'twTextLabel' => 'text-yellow-300'],
        ['hex' => '#facc15', 'twLabel' => 'yellow-400', 'twBgLabel' => 'bg-yellow-400', 'twFillLabel' => 'fill-yellow-400', 'twTextLabel' => 'text-yellow-400'],
        ['hex' => '#eab308', 'twLabel' => 'yellow-500', 'twBgLabel' => 'bg-yellow-500', 'twFillLabel' => 'fill-yellow-500', 'twTextLabel' => 'text-yellow-500'],
        ['hex' => '#ca8a04', 'twLabel' => 'yellow-600', 'twBgLabel' => 'bg-yellow-600', 'twFillLabel' => 'fill-yellow-600', 'twTextLabel' => 'text-yellow-600'],
        ['hex' => '#a16207', 'twLabel' => 'yellow-700', 'twBgLabel' => 'bg-yellow-700', 'twFillLabel' => 'fill-yellow-700', 'twTextLabel' => 'text-yellow-700'],
        ['hex' => '#854d0e', 'twLabel' => 'yellow-800', 'twBgLabel' => 'bg-yellow-800', 'twFillLabel' => 'fill-yellow-800', 'twTextLabel' => 'text-yellow-800'],
        ['hex' => '#713f12', 'twLabel' => 'yellow-900', 'twBgLabel' => 'bg-yellow-900', 'twFillLabel' => 'fill-yellow-900', 'twTextLabel' => 'text-yellow-900'],

        // Green
        ['hex' => '#f0fdf4', 'twLabel' => 'green-50',  'twBgLabel' => 'bg-green-50',  'twFillLabel' => 'fill-green-50', 'twTextLabel' => 'text-green-50'],
        ['hex' => '#dcfce7', 'twLabel' => 'green-100', 'twBgLabel' => 'bg-green-100', 'twFillLabel' => 'fill-green-100', 'twTextLabel' => 'text-green-100'],
        ['hex' => '#bbf7d0', 'twLabel' => 'green-200', 'twBgLabel' => 'bg-green-200', 'twFillLabel' => 'fill-green-200', 'twTextLabel' => 'text-green-200'],
        ['hex' => '#86efac', 'twLabel' => 'green-300', 'twBgLabel' => 'bg-green-300', 'twFillLabel' => 'fill-green-300', 'twTextLabel' => 'text-green-300'],
        ['hex' => '#4ade80', 'twLabel' => 'green-400', 'twBgLabel' => 'bg-green-400', 'twFillLabel' => 'fill-green-400', 'twTextLabel' => 'text-green-400'],
        ['hex' => '#22c55e', 'twLabel' => 'green-500', 'twBgLabel' => 'bg-green-500', 'twFillLabel' => 'fill-green-500', 'twTextLabel' => 'text-green-500'],
        ['hex' => '#16a34a', 'twLabel' => 'green-600', 'twBgLabel' => 'bg-green-600', 'twFillLabel' => 'fill-green-600', 'twTextLabel' => 'text-green-600'],
        ['hex' => '#15803d', 'twLabel' => 'green-700', 'twBgLabel' => 'bg-green-700', 'twFillLabel' => 'fill-green-700', 'twTextLabel' => 'text-green-700'],
        ['hex' => '#166534', 'twLabel' => 'green-800', 'twBgLabel' => 'bg-green-800', 'twFillLabel' => 'fill-green-800', 'twTextLabel' => 'text-green-800'],
        ['hex' => '#14532d', 'twLabel' => 'green-900', 'twBgLabel' => 'bg-green-900', 'twFillLabel' => 'fill-green-900', 'twTextLabel' => 'text-green-900'],

        // Emerald
        ['hex' => '#ecfdf5', 'twLabel' => 'emerald-50',  'twBgLabel' => 'bg-emerald-50',  'twFillLabel' => 'fill-emerald-50', 'twTextLabel' => 'text-emerald-50'],
        ['hex' => '#d1fae5', 'twLabel' => 'emerald-100', 'twBgLabel' => 'bg-emerald-100', 'twFillLabel' => 'fill-emerald-100', 'twTextLabel' => 'text-emerald-100'],
        ['hex' => '#a7f3d0', 'twLabel' => 'emerald-200', 'twBgLabel' => 'bg-emerald-200', 'twFillLabel' => 'fill-emerald-200', 'twTextLabel' => 'text-emerald-200'],
        ['hex' => '#6ee7b7', 'twLabel' => 'emerald-300', 'twBgLabel' => 'bg-emerald-300', 'twFillLabel' => 'fill-emerald-300', 'twTextLabel' => 'text-emerald-300'],
        ['hex' => '#34d399', 'twLabel' => 'emerald-400', 'twBgLabel' => 'bg-emerald-400', 'twFillLabel' => 'fill-emerald-400', 'twTextLabel' => 'text-emerald-400'],
        ['hex' => '#10b981', 'twLabel' => 'emerald-500', 'twBgLabel' => 'bg-emerald-500', 'twFillLabel' => 'fill-emerald-500', 'twTextLabel' => 'text-emerald-500'],
        ['hex' => '#059669', 'twLabel' => 'emerald-600', 'twBgLabel' => 'bg-emerald-600', 'twFillLabel' => 'fill-emerald-600', 'twTextLabel' => 'text-emerald-600'],
        ['hex' => '#047857', 'twLabel' => 'emerald-700', 'twBgLabel' => 'bg-emerald-700', 'twFillLabel' => 'fill-emerald-700', 'twTextLabel' => 'text-emerald-700'],
        ['hex' => '#065f46', 'twLabel' => 'emerald-800', 'twBgLabel' => 'bg-emerald-800', 'twFillLabel' => 'fill-emerald-800', 'twTextLabel' => 'text-emerald-800'],
        ['hex' => '#064e3b', 'twLabel' => 'emerald-900', 'twBgLabel' => 'bg-emerald-900', 'twFillLabel' => 'fill-emerald-900', 'twTextLabel' => 'text-emerald-900'],

        // Teal
        ['hex' => '#f0fdfa', 'twLabel' => 'teal-50',  'twBgLabel' => 'bg-teal-50',  'twFillLabel' => 'fill-teal-50', 'twTextLabel' => 'text-teal-50'],
        ['hex' => '#ccfbf1', 'twLabel' => 'teal-100', 'twBgLabel' => 'bg-teal-100', 'twFillLabel' => 'fill-teal-100', 'twTextLabel' => 'text-teal-100'],
        ['hex' => '#99f6e4', 'twLabel' => 'teal-200', 'twBgLabel' => 'bg-teal-200', 'twFillLabel' => 'fill-teal-200', 'twTextLabel' => 'text-teal-200'],
        ['hex' => '#5eead4', 'twLabel' => 'teal-300', 'twBgLabel' => 'bg-teal-300', 'twFillLabel' => 'fill-teal-300', 'twTextLabel' => 'text-teal-300'],
        ['hex' => '#2dd4bf', 'twLabel' => 'teal-400', 'twBgLabel' => 'bg-teal-400', 'twFillLabel' => 'fill-teal-400', 'twTextLabel' => 'text-teal-400'],
        ['hex' => '#14b8a6', 'twLabel' => 'teal-500', 'twBgLabel' => 'bg-teal-500', 'twFillLabel' => 'fill-teal-500', 'twTextLabel' => 'text-teal-500'],
        ['hex' => '#0d9488', 'twLabel' => 'teal-600', 'twBgLabel' => 'bg-teal-600', 'twFillLabel' => 'fill-teal-600', 'twTextLabel' => 'text-teal-600'],
        ['hex' => '#0f766e', 'twLabel' => 'teal-700', 'twBgLabel' => 'bg-teal-700', 'twFillLabel' => 'fill-teal-700', 'twTextLabel' => 'text-teal-700'],
        ['hex' => '#115e59', 'twLabel' => 'teal-800', 'twBgLabel' => 'bg-teal-800', 'twFillLabel' => 'fill-teal-800', 'twTextLabel' => 'text-teal-800'],
        ['hex' => '#134e4a', 'twLabel' => 'teal-900', 'twBgLabel' => 'bg-teal-900', 'twFillLabel' => 'fill-teal-900', 'twTextLabel' => 'text-teal-900'],

        // Cyan
        ['hex' => '#ecfeff', 'twLabel' => 'cyan-50',  'twBgLabel' => 'bg-cyan-50',  'twFillLabel' => 'fill-cyan-50', 'twTextLabel' => 'text-cyan-50'],
        ['hex' => '#cffafe', 'twLabel' => 'cyan-100', 'twBgLabel' => 'bg-cyan-100', 'twFillLabel' => 'fill-cyan-100', 'twTextLabel' => 'text-cyan-100'],
        ['hex' => '#a5f3fc', 'twLabel' => 'cyan-200', 'twBgLabel' => 'bg-cyan-200', 'twFillLabel' => 'fill-cyan-200', 'twTextLabel' => 'text-cyan-200'],
        ['hex' => '#67e8f9', 'twLabel' => 'cyan-300', 'twBgLabel' => 'bg-cyan-300', 'twFillLabel' => 'fill-cyan-300', 'twTextLabel' => 'text-cyan-300'],
        ['hex' => '#22d3ee', 'twLabel' => 'cyan-400', 'twBgLabel' => 'bg-cyan-400', 'twFillLabel' => 'fill-cyan-400', 'twTextLabel' => 'text-cyan-400'],
        ['hex' => '#06b6d4', 'twLabel' => 'cyan-500', 'twBgLabel' => 'bg-cyan-500', 'twFillLabel' => 'fill-cyan-500', 'twTextLabel' => 'text-cyan-500'],
        ['hex' => '#0891b2', 'twLabel' => 'cyan-600', 'twBgLabel' => 'bg-cyan-600', 'twFillLabel' => 'fill-cyan-600', 'twTextLabel' => 'text-cyan-600'],
        ['hex' => '#0e7490', 'twLabel' => 'cyan-700', 'twBgLabel' => 'bg-cyan-700', 'twFillLabel' => 'fill-cyan-700', 'twTextLabel' => 'text-cyan-700'],
        ['hex' => '#155e75', 'twLabel' => 'cyan-800', 'twBgLabel' => 'bg-cyan-800', 'twFillLabel' => 'fill-cyan-800', 'twTextLabel' => 'text-cyan-800'],
        ['hex' => '#164e63', 'twLabel' => 'cyan-900', 'twBgLabel' => 'bg-cyan-900', 'twFillLabel' => 'fill-cyan-900', 'twTextLabel' => 'text-cyan-900'],

        // Sky
        ['hex' => '#f0f9ff', 'twLabel' => 'sky-50',  'twBgLabel' => 'bg-sky-50',  'twFillLabel' => 'fill-sky-50', 'twTextLabel' => 'text-sky-50'],
        ['hex' => '#e0f2fe', 'twLabel' => 'sky-100', 'twBgLabel' => 'bg-sky-100', 'twFillLabel' => 'fill-sky-100', 'twTextLabel' => 'text-sky-100'],
        ['hex' => '#bae6fd', 'twLabel' => 'sky-200', 'twBgLabel' => 'bg-sky-200', 'twFillLabel' => 'fill-sky-200', 'twTextLabel' => 'text-sky-200'],
        ['hex' => '#7dd3fc', 'twLabel' => 'sky-300', 'twBgLabel' => 'bg-sky-300', 'twFillLabel' => 'fill-sky-300', 'twTextLabel' => 'text-sky-300'],
        ['hex' => '#38bdf8', 'twLabel' => 'sky-400', 'twBgLabel' => 'bg-sky-400', 'twFillLabel' => 'fill-sky-400', 'twTextLabel' => 'text-sky-400'],
        ['hex' => '#0ea5e9', 'twLabel' => 'sky-500', 'twBgLabel' => 'bg-sky-500', 'twFillLabel' => 'fill-sky-500', 'twTextLabel' => 'text-sky-500'],
        ['hex' => '#0284c7', 'twLabel' => 'sky-600', 'twBgLabel' => 'bg-sky-600', 'twFillLabel' => 'fill-sky-600', 'twTextLabel' => 'text-sky-600'],
        ['hex' => '#0369a1', 'twLabel' => 'sky-700', 'twBgLabel' => 'bg-sky-700', 'twFillLabel' => 'fill-sky-700', 'twTextLabel' => 'text-sky-700'],
        ['hex' => '#075985', 'twLabel' => 'sky-800', 'twBgLabel' => 'bg-sky-800', 'twFillLabel' => 'fill-sky-800', 'twTextLabel' => 'text-sky-800'],
        ['hex' => '#0c4a6e', 'twLabel' => 'sky-900', 'twBgLabel' => 'bg-sky-900', 'twFillLabel' => 'fill-sky-900', 'twTextLabel' => 'text-sky-900'],

        // Blue
        ['hex' => '#eff6ff', 'twLabel' => 'blue-50',  'twBgLabel' => 'bg-blue-50',  'twFillLabel' => 'fill-blue-50', 'twTextLabel' => 'text-blue-50'],
        ['hex' => '#dbeafe', 'twLabel' => 'blue-100', 'twBgLabel' => 'bg-blue-100', 'twFillLabel' => 'fill-blue-100', 'twFillLabel' => 'fill-blue-100', 'twTextLabel' => 'text-blue-100'],
        ['hex' => '#bfdbfe', 'twLabel' => 'blue-200', 'twBgLabel' => 'bg-blue-200', 'twFillLabel' => 'fill-blue-200', 'twTextLabel' => 'text-blue-200'],
        ['hex' => '#93c5fd', 'twLabel' => 'blue-300', 'twBgLabel' => 'bg-blue-300', 'twFillLabel' => 'fill-blue-300', 'twTextLabel' => 'text-blue-300'],
        ['hex' => '#60a5fa', 'twLabel' => 'blue-400', 'twBgLabel' => 'bg-blue-400', 'twFillLabel' => 'fill-blue-400', 'twTextLabel' => 'text-blue-400'],
        ['hex' => '#3b82f6', 'twLabel' => 'blue-500', 'twBgLabel' => 'bg-blue-500', 'twFillLabel' => 'fill-blue-500', 'twTextLabel' => 'text-blue-500'],
        ['hex' => '#2563eb', 'twLabel' => 'blue-600', 'twBgLabel' => 'bg-blue-600', 'twFillLabel' => 'fill-blue-600', 'twTextLabel' => 'text-blue-600'],
        ['hex' => '#1d4ed8', 'twLabel' => 'blue-700', 'twBgLabel' => 'bg-blue-700', 'twFillLabel' => 'fill-blue-700', 'twTextLabel' => 'text-blue-700'],
        ['hex' => '#1e40af', 'twLabel' => 'blue-800', 'twBgLabel' => 'bg-blue-800', 'twFillLabel' => 'fill-blue-800', 'twTextLabel' => 'text-blue-800'],
        ['hex' => '#1e3a8a', 'twLabel' => 'blue-900', 'twBgLabel' => 'bg-blue-900', 'twFillLabel' => 'fill-blue-900', 'twTextLabel' => 'text-blue-900'],

        // Indigo
        ['hex' => '#eef2ff', 'twLabel' => 'indigo-50',  'twBgLabel' => 'bg-indigo-50',  'twFillLabel' => 'fill-indigo-50', 'twTextLabel' => 'text-indigo-50'],
        ['hex' => '#e0e7ff', 'twLabel' => 'indigo-100', 'twBgLabel' => 'bg-indigo-100', 'twFillLabel' => 'fill-indigo-100', 'twTextLabel' => 'text-indigo-100'],
        ['hex' => '#c7d2fe', 'twLabel' => 'indigo-200', 'twBgLabel' => 'bg-indigo-200', 'twFillLabel' => 'fill-indigo-200', 'twTextLabel' => 'text-indigo-200'],
        ['hex' => '#a5b4fc', 'twLabel' => 'indigo-300', 'twBgLabel' => 'bg-indigo-300', 'twFillLabel' => 'fill-indigo-300', 'twTextLabel' => 'text-indigo-300'],
        ['hex' => '#818cf8', 'twLabel' => 'indigo-400', 'twBgLabel' => 'bg-indigo-400', 'twFillLabel' => 'fill-indigo-400', 'twTextLabel' => 'text-indigo-400'],
        ['hex' => '#6366f1', 'twLabel' => 'indigo-500', 'twBgLabel' => 'bg-indigo-500', 'twFillLabel' => 'fill-indigo-500', 'twTextLabel' => 'text-indigo-500'],
        ['hex' => '#4f46e5', 'twLabel' => 'indigo-600', 'twBgLabel' => 'bg-indigo-600', 'twFillLabel' => 'fill-indigo-600', 'twTextLabel' => 'text-indigo-600'],
        ['hex' => '#4338ca', 'twLabel' => 'indigo-700', 'twBgLabel' => 'bg-indigo-700', 'twFillLabel' => 'fill-indigo-700', 'twTextLabel' => 'text-indigo-700'],
        ['hex' => '#3730a3', 'twLabel' => 'indigo-800', 'twBgLabel' => 'bg-indigo-800', 'twFillLabel' => 'fill-indigo-800', 'twTextLabel' => 'text-indigo-800'],
        ['hex' => '#312e81', 'twLabel' => 'indigo-900', 'twBgLabel' => 'bg-indigo-900', 'twFillLabel' => 'fill-indigo-900', 'twTextLabel' => 'text-indigo-900'],

        // Violet
        ['hex' => '#f5f3ff', 'twLabel' => 'violet-50',  'twBgLabel' => 'bg-violet-50',  'twFillLabel' => 'fill-violet-50', 'twTextLabel' => 'text-violet-50'],
        ['hex' => '#ede9fe', 'twLabel' => 'violet-100', 'twBgLabel' => 'bg-violet-100', 'twFillLabel' => 'fill-violet-100', 'twTextLabel' => 'text-violet-100'],
        ['hex' => '#ddd6fe', 'twLabel' => 'violet-200', 'twBgLabel' => 'bg-violet-200', 'twFillLabel' => 'fill-violet-200', 'twTextLabel' => 'text-violet-200'],
        ['hex' => '#c4b5fd', 'twLabel' => 'violet-300', 'twBgLabel' => 'bg-violet-300', 'twFillLabel' => 'fill-violet-300', 'twTextLabel' => 'text-violet-300'],
        ['hex' => '#a78bfa', 'twLabel' => 'violet-400', 'twBgLabel' => 'bg-violet-400', 'twFillLabel' => 'fill-violet-400', 'twTextLabel' => 'text-violet-400'],
        ['hex' => '#8b5cf6', 'twLabel' => 'violet-500', 'twBgLabel' => 'bg-violet-500', 'twFillLabel' => 'fill-violet-500', 'twTextLabel' => 'text-violet-500'],
        ['hex' => '#7c3aed', 'twLabel' => 'violet-600', 'twBgLabel' => 'bg-violet-600', 'twFillLabel' => 'fill-violet-600', 'twTextLabel' => 'text-violet-600'],
        ['hex' => '#6d28d9', 'twLabel' => 'violet-700', 'twBgLabel' => 'bg-violet-700', 'twFillLabel' => 'fill-violet-700', 'twTextLabel' => 'text-violet-700'],
        ['hex' => '#5b21b6', 'twLabel' => 'violet-800', 'twBgLabel' => 'bg-violet-800', 'twFillLabel' => 'fill-violet-800', 'twTextLabel' => 'text-violet-800'],
        ['hex' => '#4c1d95', 'twLabel' => 'violet-900', 'twBgLabel' => 'bg-violet-900', 'twFillLabel' => 'fill-violet-900', 'twTextLabel' => 'text-violet-900'],

        // Purple
        ['hex' => '#faf5ff', 'twLabel' => 'purple-50',  'twBgLabel' => 'bg-purple-50',  'twFillLabel' => 'fill-purple-50', 'twTextLabel' => 'text-purple-50'],
        ['hex' => '#f3e8ff', 'twLabel' => 'purple-100', 'twBgLabel' => 'bg-purple-100', 'twFillLabel' => 'fill-purple-100', 'twTextLabel' => 'text-purple-100'],
        ['hex' => '#e9d5ff', 'twLabel' => 'purple-200', 'twBgLabel' => 'bg-purple-200', 'twFillLabel' => 'fill-purple-200', 'twTextLabel' => 'text-purple-200'],
        ['hex' => '#d8b4fe', 'twLabel' => 'purple-300', 'twBgLabel' => 'bg-purple-300', 'twFillLabel' => 'fill-purple-300', 'twTextLabel' => 'text-purple-300'],
        ['hex' => '#c084fc', 'twLabel' => 'purple-400', 'twBgLabel' => 'bg-purple-400', 'twFillLabel' => 'fill-purple-400', 'twTextLabel' => 'text-purple-400'],
        ['hex' => '#a855f7', 'twLabel' => 'purple-500', 'twBgLabel' => 'bg-purple-500', 'twFillLabel' => 'fill-purple-500', 'twTextLabel' => 'text-purple-500'],
        ['hex' => '#9333ea', 'twLabel' => 'purple-600', 'twBgLabel' => 'bg-purple-600', 'twFillLabel' => 'fill-purple-600', 'twTextLabel' => 'text-purple-600'],
        ['hex' => '#7e22ce', 'twLabel' => 'purple-700', 'twBgLabel' => 'bg-purple-700', 'twFillLabel' => 'fill-purple-700', 'twTextLabel' => 'text-purple-700'],
        ['hex' => '#6b21a8', 'twLabel' => 'purple-800', 'twBgLabel' => 'bg-purple-800', 'twFillLabel' => 'fill-purple-800', 'twTextLabel' => 'text-purple-800'],
        ['hex' => '#581c87', 'twLabel' => 'purple-900', 'twBgLabel' => 'bg-purple-900', 'twFillLabel' => 'fill-purple-900', 'twTextLabel' => 'text-purple-900'],

        // Fuschia
        ['hex' => '#fdf4ff', 'twLabel' => 'fuchsia-50',  'twBgLabel' => 'bg-fuchsia-50',  'twFillLabel' => 'fill-fuchsia-50', 'twTextLabel' => 'text-fuchsia-50'],
        ['hex' => '#fae8ff', 'twLabel' => 'fuchsia-100', 'twBgLabel' => 'bg-fuchsia-100', 'twFillLabel' => 'fill-fuchsia-100', 'twTextLabel' => 'text-fuchsia-100'],
        ['hex' => '#f5d0fe', 'twLabel' => 'fuchsia-200', 'twBgLabel' => 'bg-fuchsia-200', 'twFillLabel' => 'fill-fuchsia-200', 'twTextLabel' => 'text-fuchsia-200'],
        ['hex' => '#f0abfc', 'twLabel' => 'fuchsia-300', 'twBgLabel' => 'bg-fuchsia-300', 'twFillLabel' => 'fill-fuchsia-300', 'twTextLabel' => 'text-fuchsia-300'],
        ['hex' => '#e879f9', 'twLabel' => 'fuchsia-400', 'twBgLabel' => 'bg-fuchsia-400', 'twFillLabel' => 'fill-fuchsia-400', 'twTextLabel' => 'text-fuchsia-400'],
        ['hex' => '#d946ef', 'twLabel' => 'fuchsia-500', 'twBgLabel' => 'bg-fuchsia-500', 'twFillLabel' => 'fill-fuchsia-500', 'twTextLabel' => 'text-fuchsia-500'],
        ['hex' => '#c026d3', 'twLabel' => 'fuchsia-600', 'twBgLabel' => 'bg-fuchsia-600', 'twFillLabel' => 'fill-fuchsia-600', 'twTextLabel' => 'text-fuchsia-600'],
        ['hex' => '#a21caf', 'twLabel' => 'fuchsia-700', 'twBgLabel' => 'bg-fuchsia-700', 'twFillLabel' => 'fill-fuchsia-700', 'twTextLabel' => 'text-fuchsia-700'],
        ['hex' => '#86198f', 'twLabel' => 'fuchsia-800', 'twBgLabel' => 'bg-fuchsia-800', 'twFillLabel' => 'fill-fuchsia-800', 'twTextLabel' => 'text-fuchsia-800'],
        ['hex' => '#701a75', 'twLabel' => 'fuchsia-900', 'twBgLabel' => 'bg-fuchsia-900', 'twFillLabel' => 'fill-fuchsia-900', 'twTextLabel' => 'text-fuchsia-900'],

        // Pink
        ['hex' => '#fdf2f8', 'twLabel' => 'pink-50',  'twBgLabel' => 'bg-pink-50',  'twFillLabel' => 'fill-pink-50', 'twTextLabel' => 'text-pink-50'],
        ['hex' => '#fce7f3', 'twLabel' => 'pink-100', 'twBgLabel' => 'bg-pink-100', 'twFillLabel' => 'fill-pink-100', 'twTextLabel' => 'text-pink-100'],
        ['hex' => '#fbcfe8', 'twLabel' => 'pink-200', 'twBgLabel' => 'bg-pink-200', 'twFillLabel' => 'fill-pink-200', 'twTextLabel' => 'text-pink-200'],
        ['hex' => '#f9a8d4', 'twLabel' => 'pink-300', 'twBgLabel' => 'bg-pink-300', 'twFillLabel' => 'fill-pink-300', 'twTextLabel' => 'text-pink-300'],
        ['hex' => '#f472b6', 'twLabel' => 'pink-400', 'twBgLabel' => 'bg-pink-400', 'twFillLabel' => 'fill-pink-400', 'twTextLabel' => 'text-pink-400'],
        ['hex' => '#ec4899', 'twLabel' => 'pink-500', 'twBgLabel' => 'bg-pink-500', 'twFillLabel' => 'fill-pink-500', 'twTextLabel' => 'text-pink-500'],
        ['hex' => '#db2777', 'twLabel' => 'pink-600', 'twBgLabel' => 'bg-pink-600', 'twFillLabel' => 'fill-pink-600', 'twTextLabel' => 'text-pink-600'],
        ['hex' => '#be185d', 'twLabel' => 'pink-700', 'twBgLabel' => 'bg-pink-700', 'twFillLabel' => 'fill-pink-700', 'twTextLabel' => 'text-pink-700'],
        ['hex' => '#9d174d', 'twLabel' => 'pink-800', 'twBgLabel' => 'bg-pink-800', 'twFillLabel' => 'fill-pink-800', 'twTextLabel' => 'text-pink-800'],
        ['hex' => '#831843', 'twLabel' => 'pink-900', 'twBgLabel' => 'bg-pink-900', 'twFillLabel' => 'fill-pink-900', 'twTextLabel' => 'text-pink-900'],

        // Rose
        ['hex' => '#fff1f2', 'twLabel' => 'rose-50',  'twBgLabel' => 'bg-rose-50',  'twFillLabel' => 'fill-rose-50', 'twTextLabel' => 'text-rose-50'],
        ['hex' => '#ffe4e6', 'twLabel' => 'rose-100', 'twBgLabel' => 'bg-rose-100', 'twFillLabel' => 'fill-rose-100', 'twTextLabel' => 'text-rose-100'],
        ['hex' => '#fecdd3', 'twLabel' => 'rose-200', 'twBgLabel' => 'bg-rose-200', 'twFillLabel' => 'fill-rose-200', 'twTextLabel' => 'text-rose-200'],
        ['hex' => '#fda4af', 'twLabel' => 'rose-300', 'twBgLabel' => 'bg-rose-300', 'twFillLabel' => 'fill-rose-300', 'twTextLabel' => 'text-rose-300'],
        ['hex' => '#fb7185', 'twLabel' => 'rose-400', 'twBgLabel' => 'bg-rose-400', 'twFillLabel' => 'fill-rose-400', 'twTextLabel' => 'text-rose-400'],
        ['hex' => '#f43f5e', 'twLabel' => 'rose-500', 'twBgLabel' => 'bg-rose-500', 'twFillLabel' => 'fill-rose-500', 'twTextLabel' => 'text-rose-500'],
        ['hex' => '#e11d48', 'twLabel' => 'rose-600', 'twBgLabel' => 'bg-rose-600', 'twFillLabel' => 'fill-rose-600', 'twTextLabel' => 'text-rose-600'],
        ['hex' => '#be123c', 'twLabel' => 'rose-700', 'twBgLabel' => 'bg-rose-700', 'twFillLabel' => 'fill-rose-700', 'twTextLabel' => 'text-rose-700'],
        ['hex' => '#9f1239', 'twLabel' => 'rose-800', 'twBgLabel' => 'bg-rose-800', 'twFillLabel' => 'fill-rose-800', 'twTextLabel' => 'text-rose-800'],
        ['hex' => '#881337', 'twLabel' => 'rose-900', 'twBgLabel' => 'bg-rose-900', 'twFillLabel' => 'fill-rose-900', 'twTextLabel' => 'text-rose-900'],

        // black, white
        ['hex' => '#ffffff', 'twLabel' => 'white', 'twBgLabel' => 'bg-white', 'twFillLabel' => 'fill-white', 'twTextLabel' => 'text-white'],
        ['hex' => '#000000', 'twLabel' => 'black',  'twBgLabel' => 'bg-black', 'twFillLabel' => 'fill-black', 'twTextLabel' => 'text-black'],

    ];

    public function getColorSelected()
    {
        return $this->colorSelected;
    }

    public function getColors()
    {
        if ($this->colorsOpacityActivated) {
            return $this->colorsOpacity50;
        }

        return $this->colors;
    }

    public function isOpen()
    {
        return $this->isOpen;
    }

    public function getBgColorSelected()
    {
        return $this->bgColorSelected;
    }

    /**
     * Function to asset scope
     *
     * @param  string  $scope
     * @return Field
     */
    protected function setScope(string $scope)
    {
        $this->scope = $scope;

        return $this;
    }

    /**
     * Add a function to use in resources to set directly the scope to text
     *
     * @return Field
     */
    public function textScope()
    {
        $this->setScope('text-');

        return $this;
    }

    /**
     * Add a function to use in resources to set directly the scope to
     * background
     *
     * @return Field
     */
    public function bgScope()
    {
        $this->setScope('bg-');

        return $this;
    }

    /**
     * Add a function to use in resources to set directly the scope to
     * fill
     *
     * @return Field
     */
    public function fillScope()
    {
        $this->setScope('fill-');

        return $this;
    }

    public function onlyOpacity()
    {
        $this->colorsOpacityActivated = true;

        return $this;
    }
}
