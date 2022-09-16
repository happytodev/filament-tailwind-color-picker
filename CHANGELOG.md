# Changelog

All notable changes to `filament-tailwind-color-picker` will be documented in this file.

## v0.1.8 - 2022-09-16
- Add the possibility to aliment 'fill-' with Tailwind color (only 50% of opacity right now)

## v0.1.7 - 2022-08-31
- Remove unused code
- Remove debug message
- Add social picture for FTCP in README

## v0.1.6 - 2022-08-31
- Add background on load on the color picker. 
- Pipette now has the right color (white or black) depending on the selected colour's darkness. 
- Optimize the tailwind CSS size of the plugin.

## v0.1.5 - 2022-08-28
- add publishable assets

## v0.1.4 - 2022-08-28
- add `bgScope()` and `textScope()` function
- `setScope` is now a protected function
- Edit README

## v0.1.3 - 2022-08-27
- WIP on CSS

## v0.1.1 - 2022-08-26
- Improve UI
- Add specific CSS file to the component

## v0.1.0 - 2022-08-25
- First fully functional version
- All Tailwind colors are inside
- This new field can be called by `TailwindColorPicker::make('nameOfYourField')` and with `setScope()`function you determine to what the choosen color will be applied. Currently, you can pass two options to the `setScope` function : 
'bg-' or 'text-' 
