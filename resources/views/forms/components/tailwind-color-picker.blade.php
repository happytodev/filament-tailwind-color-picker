<x-forms::field-wrapper :id="$getId()" :label="$getLabel()" :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()" :hint="$getHint()"
    :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()">
    <div x-data="{ 
            colors: @js( $getColors() ), 
            isOpen: false,
            scope: @js($scope),
            colorSelectedHex: @js($colorSelectedHex),
            bgColorSelected: @js($bgColorSelected),
            changeColor(twLabel, hex) {
                this.colorSelected = this.scope + twLabel;
                this.colorSelectedHex = hex;
                this.bgColorSelected = 'bg-' + twLabel;
            },
            colorSelected: $wire.entangle('{{ $getStatePath() }}'),
        }"
        x-init="bgColorSelected = 'bg-' + colorSelected.replace(scope, '')">

        <!-- Interact with the `state` property in Alpine.js -->

        <div class="max-w-sm py-2 my-2 relative">
            <div class="mb-5">
                <div class="flex items-center">
                    <div>
                        <label for="colorSelector" class="block font-bold mb-1">Select Color</label>
                        <input 
                            x-ref="input"
                            id="{{ $getId() }}" 
                            type="text" 
                            {!! ($placeholder = $getPlaceholder()) ? "placeholder=\"{$placeholder}\"" : "Pick a color" !!}
                            class="border border-transparent shadow px-4 py-2 leading-normal text-gray-700 bg-white rounded-md focus:outline-none focus:shadow-outline"
                            readonly 
                            x-model="colorSelected" />
                    </div>
                    <div class=" ml-3 mt-8 w-96">
                        <button type="button" @click="isOpen = !isOpen"
                            class="w-10 h-10 rounded-full focus:outline-none focus:shadow-outline inline-flex p-2 shadow"
                            :class="bgColorSelected">
                            <svg class="w-6 h-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path fill="none"
                                    d="M15.584 10.001L13.998 8.417 5.903 16.512 5.374 18.626 7.488 18.097z" />
                                <path
                                    d="M4.03,15.758l-1,4c-0.086,0.341,0.015,0.701,0.263,0.949C3.482,20.896,3.738,21,4,21c0.081,0,0.162-0.01,0.242-0.03l4-1 c0.176-0.044,0.337-0.135,0.465-0.263l8.292-8.292l1.294,1.292l1.414-1.414l-1.294-1.292L21,7.414 c0.378-0.378,0.586-0.88,0.586-1.414S21.378,4.964,21,4.586L19.414,3c-0.756-0.756-2.072-0.756-2.828,0l-2.589,2.589l-1.298-1.296 l-1.414,1.414l1.298,1.296l-8.29,8.29C4.165,15.421,4.074,15.582,4.03,15.758z M5.903,16.512l8.095-8.095l1.586,1.584 l-8.096,8.096l-2.114,0.529L5.903,16.512z" />
                            </svg>
                        </button>

                        <div x-show="isOpen" @click.away="isOpen = false"
                            x-transition:enter="transition ease-out duration-100 transform"
                            x-transition:enter-start="opacity-0 scale-95" 
                            x-transition:enter-end="opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75 transform"
                            x-transition:leave-start="opacity-100 scale-100" 
                            x-transition:leave-end="opacity-0 scale-95"
                            class="origin-top-right absolute mt-4 bg-gray-800 rounded-md shadow-lg z-50 border-2 border-gray-500">
                            <div class="rounded-md shadow-xs w-[28rem]">
                                <div class="text-xs text-gray-50 text-center w-full pt-2">Preview zone</span></div>
                                <div class="rounded-md border-2 border-dashed border-gray-50 h-24 m-4">
                                    <div class="w-full h-full rounded-md"
                                         :style="{ 'background-color': colorSelectedHex }"
                                    >
                                    </div>
                                </div>
                                <div class="grid grid-cols-10 pt-2 border-t-2 border-gray-500 bg-gray-100">
                                    <template x-for="color in colors" :key="color.twLabel">
                                        <div class="px-2">
                                            <template x-if="colorSelected === color.twLabel">
                                                <div class="w-8 h-8 inline-flex rounded-full cursor-pointer border-2 border-gray-400"
                                                style="box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.2);"
                                                :style="{ 'background-color': color.hex }"
                                                :title="color.twLabel">
                                                </div>    
                                            </template>

                                            <template x-if="colorSelected != color.twLabel">
                                                <div 
                                                @click="changeColor(color.twLabel, color.hex)"
                                                wire:keydown.enter="changeColor(color.twLabel, color.hex)" role="checkbox"
                                                tabindex="0" :aria-checked="colorSelected"
                                                class="w-8 h-8 inline-flex rounded-full cursor-pointer border-2 border-gray-400 focus:outline-none focus:shadow-outline"
                                                :style="{ 'background-color': color.hex }"
                                                :title="color.twLabel">
                                                </div>
                                            </template>
                                        </div>
                                    </template>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-forms::field-wrapper>
