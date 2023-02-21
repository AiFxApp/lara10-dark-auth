<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AIFX | v0.0.1 </title>

    <link rel="shortcut icon" type="image/x-icon" href="data:image/svg+xml,&lt;svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22&gt;&lt;text y=%22.9em%22 font-size=%2290%22&gt;📿&lt;/text&gt;&lt;/svg&gt;">

    <style>/* ! tailwindcss v3.2.6 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.sr-only{position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0, 0, 0, 0);white-space:nowrap;border-width:0}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.inset-0{top:0px;right:0px;bottom:0px;left:0px}.bottom-0{bottom:0px}.left-0{left:0px}.right-0{right:0px}.top-0{top:0px}.z-0{z-index:0}.z-10{z-index:10}.z-50{z-index:50}.col-span-12{grid-column:span 12 / span 12}.col-span-4{grid-column:span 4 / span 4}.mx-1{margin-left:0.25rem;margin-right:0.25rem}.mx-auto{margin-left:auto;margin-right:auto}.my-20{margin-top:5rem;margin-bottom:5rem}.-mx-5{margin-left:-1.25rem;margin-right:-1.25rem}.-my-2{margin-top:-0.5rem;margin-bottom:-0.5rem}.-mb-1{margin-bottom:-0.25rem}.-ml-0{margin-left:-0px}.mb-2{margin-bottom:0.5rem}.mb-3{margin-bottom:0.75rem}.mb-6{margin-bottom:1.5rem}.ml-1{margin-left:0.25rem}.mr-1{margin-right:0.25rem}.mt-1{margin-top:0.25rem}.mt-10{margin-top:2.5rem}.mt-2{margin-top:0.5rem}.mt-3{margin-top:0.75rem}.mt-5{margin-top:1.25rem}.mt-8{margin-top:2rem}.mt-4{margin-top:1rem}.box-content{box-sizing:content-box}.block{display:block}.inline-block{display:inline-block}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-0{height:0px}.h-0\.5{height:0.125rem}.h-1{height:0.25rem}.h-10{height:2.5rem}.h-3{height:0.75rem}.h-3\.5{height:0.875rem}.h-4{height:1rem}.h-5{height:1.25rem}.h-8{height:2rem}.h-auto{height:auto}.h-full{height:100%}.h-6{height:1.5rem}.max-h-56{max-height:14rem}.max-h-64{max-height:16rem}.min-h-screen{min-height:100vh}.w-10{width:2.5rem}.w-3{width:0.75rem}.w-3\.5{width:0.875rem}.w-4{width:1rem}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.w-full{width:100%}.w-6{width:1.5rem}.max-w-3xl{max-width:48rem}.max-w-6xl{max-width:72rem}.max-w-7xl{max-width:80rem}.max-w-md{max-width:28rem}.max-w-screen-xl{max-width:1280px}.-translate-y-full{--tw-translate-y:-100%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-y-0{--tw-translate-y:0px;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.select-none{-webkit-user-select:none;user-select:none}.grid-cols-12{grid-template-columns:repeat(12, minmax(0, 1fr))}.grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.flex-col{flex-direction:column}.flex-wrap{flex-wrap:wrap}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-start{justify-content:flex-start}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-8{gap:2rem}.gap-x-8{column-gap:2rem}.gap-y-16{row-gap:4rem}.space-x-3 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.75rem * var(--tw-space-x-reverse));margin-left:calc(0.75rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-5 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.25rem * var(--tw-space-x-reverse));margin-left:calc(1.25rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-3 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.75rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.75rem * var(--tw-space-y-reverse))}.space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.space-y-5 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.25rem * var(--tw-space-y-reverse))}.space-y-6 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.5rem * var(--tw-space-y-reverse))}.space-y-8 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(2rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2rem * var(--tw-space-y-reverse))}.space-x-6 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.5rem * var(--tw-space-x-reverse));margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))}.overflow-hidden{overflow:hidden}.rounded{border-radius:0.25rem}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.border{border-width:1px}.border-blue-700{--tw-border-opacity:1;border-color:rgb(29 78 216 / var(--tw-border-opacity))}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-gray-800{--tw-border-opacity:1;border-color:rgb(31 41 55 / var(--tw-border-opacity))}.border-transparent{border-color:transparent}.border-gray-300{--tw-border-opacity:1;border-color:rgb(209 213 219 / var(--tw-border-opacity))}.bg-blue-500{--tw-bg-opacity:1;background-color:rgb(59 130 246 / var(--tw-bg-opacity))}.bg-blue-600{--tw-bg-opacity:1;background-color:rgb(37 99 235 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.bg-indigo-100{--tw-bg-opacity:1;background-color:rgb(224 231 255 / var(--tw-bg-opacity))}.bg-indigo-600{--tw-bg-opacity:1;background-color:rgb(79 70 229 / var(--tw-bg-opacity))}.bg-pink-500{--tw-bg-opacity:1;background-color:rgb(236 72 153 / var(--tw-bg-opacity))}.bg-purple-500{--tw-bg-opacity:1;background-color:rgb(168 85 247 / var(--tw-bg-opacity))}.bg-red-500{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-yellow-400{--tw-bg-opacity:1;background-color:rgb(250 204 21 / var(--tw-bg-opacity))}.bg-gray-200{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity))}.bg-none{background-image:none}.bg-gradient-to-r{background-image:linear-gradient(to right, var(--tw-gradient-stops))}.from-white{--tw-gradient-from:#fff;--tw-gradient-to:rgb(255 255 255 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to:rgb(255 255 255 / 0);--tw-gradient-stops:var(--tw-gradient-from), #fff, var(--tw-gradient-to)}.to-gray-100{--tw-gradient-to:#f3f4f6}.bg-cover{background-size:cover}.object-cover{object-fit:cover}.p-3{padding:0.75rem}.p-10{padding:2.5rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.px-8{padding-left:2rem;padding-right:2rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-1\.5{padding-top:0.375rem;padding-bottom:0.375rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.py-32{padding-top:8rem;padding-bottom:8rem}.py-5{padding-top:1.25rem;padding-bottom:1.25rem}.py-6{padding-top:1.5rem;padding-bottom:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.py-8{padding-top:2rem;padding-bottom:2rem}.pb-10{padding-bottom:2.5rem}.pb-6{padding-bottom:1.5rem}.pl-2{padding-left:0.5rem}.pr-3{padding-right:0.75rem}.pt-2{padding-top:0.5rem}.text-center{text-align:center}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-base{font-size:1rem;line-height:1.5rem}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.text-5xl{font-size:3rem;line-height:1}.font-bold{font-weight:700}.font-extrabold{font-weight:800}.font-medium{font-weight:500}.font-semibold{font-weight:600}.font-black{font-weight:900}.uppercase{text-transform:uppercase}.leading-6{line-height:1.5rem}.leading-none{line-height:1}.tracking-tight{letter-spacing:-0.025em}.tracking-wide{letter-spacing:0.025em}.text-black{--tw-text-opacity:1;color:rgb(0 0 0 / var(--tw-text-opacity))}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-indigo-600{--tw-text-opacity:1;color:rgb(79 70 229 / var(--tw-text-opacity))}.text-indigo-700{--tw-text-opacity:1;color:rgb(67 56 202 / var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-blue-600{--tw-text-opacity:1;color:rgb(37 99 235 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.placeholder-gray-400::placeholder{--tw-placeholder-opacity:1;color:rgb(156 163 175 / var(--tw-placeholder-opacity))}.opacity-100{opacity:1}.shadow{--tw-shadow:0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.transition{transition-property:color, background-color, border-color, outline-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, outline-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-100{transition-duration:100ms}.duration-150{transition-duration:150ms}.duration-300{transition-duration:300ms}.duration-200{transition-duration:200ms}.ease-out{transition-timing-function:cubic-bezier(0, 0, 0.2, 1)}.ease-in{transition-timing-function:cubic-bezier(0.4, 0, 1, 1)}.hover\:bg-blue-700:hover{--tw-bg-opacity:1;background-color:rgb(29 78 216 / var(--tw-bg-opacity))}.hover\:bg-gray-200:hover{--tw-bg-opacity:1;background-color:rgb(229 231 235 / var(--tw-bg-opacity))}.hover\:bg-gray-50:hover{--tw-bg-opacity:1;background-color:rgb(249 250 251 / var(--tw-bg-opacity))}.hover\:bg-gray-800:hover{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.hover\:bg-indigo-200:hover{--tw-bg-opacity:1;background-color:rgb(199 210 254 / var(--tw-bg-opacity))}.hover\:bg-indigo-700:hover{--tw-bg-opacity:1;background-color:rgb(67 56 202 / var(--tw-bg-opacity))}.hover\:bg-gray-100:hover{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.hover\:text-gray-600:hover{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-500:hover{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.focus\:shadow-none:focus{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-4:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(4px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-blue-500:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(59 130 246 / var(--tw-ring-opacity))}.focus\:ring-blue-600:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(37 99 235 / var(--tw-ring-opacity))}.focus\:ring-opacity-50:focus{--tw-ring-opacity:0.5}.focus\:ring-offset-2:focus{--tw-ring-offset-width:2px}@media (min-width: 640px){.sm\:col-span-6{grid-column:span 6 / span 6}.sm\:-mx-3{margin-left:-0.75rem;margin-right:-0.75rem}.sm\:mb-0{margin-bottom:0px}.sm\:ml-4{margin-left:1rem}.sm\:ml-auto{margin-left:auto}.sm\:mt-0{margin-top:0px}.sm\:max-h-96{max-height:24rem}.sm\:w-auto{width:auto}.sm\:max-w-md{max-width:28rem}.sm\:grid-cols-8{grid-template-columns:repeat(8, minmax(0, 1fr))}.sm\:flex-row{flex-direction:row}.sm\:justify-start{justify-content:flex-start}.sm\:space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.sm\:space-y-8 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(2rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2rem * var(--tw-space-y-reverse))}.sm\:rounded-xl{border-radius:0.75rem}.sm\:border-l{border-left-width:1px}.sm\:border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.sm\:px-5{padding-left:1.25rem;padding-right:1.25rem}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:px-8{padding-left:2rem;padding-right:2rem}.sm\:py-24{padding-top:6rem;padding-bottom:6rem}.sm\:py-8{padding-top:2rem;padding-bottom:2rem}.sm\:pr-5{padding-right:1.25rem}.sm\:pl-4{padding-left:1rem}.sm\:text-center{text-align:center}.sm\:text-4xl{font-size:2.25rem;line-height:2.5rem}.sm\:text-5xl{font-size:3rem;line-height:1}.sm\:text-lg{font-size:1.125rem;line-height:1.75rem}.sm\:text-xl{font-size:1.25rem;line-height:1.75rem}.sm\:tracking-tight{letter-spacing:-0.025em}}@media (min-width: 768px){.md\:absolute{position:absolute}.md\:-ml-5{margin-left:-1.25rem}.md\:mb-0{margin-bottom:0px}.md\:ml-5{margin-left:1.25rem}.md\:mt-5{margin-top:1.25rem}.md\:w-1\/2{width:50%}.md\:max-w-3xl{max-width:48rem}.md\:flex-row{flex-direction:row}.md\:space-y-16 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(4rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(4rem * var(--tw-space-y-reverse))}.md\:space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.md\:space-y-5 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.25rem * var(--tw-space-y-reverse))}.md\:px-0{padding-left:0px;padding-right:0px}.md\:px-3{padding-left:0.75rem;padding-right:0.75rem}.md\:py-0{padding-top:0px;padding-bottom:0px}.md\:py-12{padding-top:3rem;padding-bottom:3rem}.md\:pb-0{padding-bottom:0px}.md\:pl-10{padding-left:2.5rem}.md\:text-2xl{font-size:1.5rem;line-height:2rem}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:text-5xl{font-size:3rem;line-height:1}.md\:text-xl{font-size:1.25rem;line-height:1.75rem}}@media (min-width: 1024px){.lg\:my-0{margin-top:0px;margin-bottom:0px}.lg\:w-6\/12{width:50%}.lg\:max-w-lg{max-width:32rem}.lg\:max-w-3xl{max-width:48rem}.lg\:grid-cols-12{grid-template-columns:repeat(12, minmax(0, 1fr))}.lg\:flex-row{flex-direction:row}.lg\:justify-end{justify-content:flex-end}.lg\:space-y-8 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(2rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2rem * var(--tw-space-y-reverse))}.lg\:p-16{padding:4rem}.lg\:px-8{padding-left:2rem;padding-right:2rem}.lg\:px-16{padding-left:4rem;padding-right:4rem}.lg\:pl-16{padding-left:4rem}.lg\:pr-0{padding-right:0px}.lg\:text-5xl{font-size:3rem;line-height:1}.lg\:text-6xl{font-size:3.75rem;line-height:1}.lg\:text-xl{font-size:1.25rem;line-height:1.75rem}}@media (min-width: 1280px){.xl\:col-span-4{grid-column:span 4 / span 4}.xl\:inline{display:inline}.xl\:w-5\/12{width:41.666667%}.xl\:w-7\/12{width:58.333333%}.xl\:space-y-9 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(2.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2.25rem * var(--tw-space-y-reverse))}.xl\:p-24{padding:6rem}.xl\:px-0{padding-left:0px;padding-right:0px}.xl\:px-5{padding-left:1.25rem;padding-right:1.25rem}.xl\:text-6xl{font-size:3.75rem;line-height:1}}</style>    <link rel="stylesheet" href="">
</head>
<body>
    <section class="relative w-full px-8 text-gray-700 bg-white body-font" data-tails-scripts="//unpkg.com/alpinejs">
    <div class="container flex flex-col flex-wrap items-center justify-between py-5 mx-auto md:flex-row max-w-7xl">
        <a href="#_" class="relative z-10 flex items-center w-auto text-2xl font-extrabold leading-none text-black select-none">TruMeta</a>

        <nav class="top-0 left-0 z-0 flex items-center justify-center w-full h-full py-5 -ml-0 space-x-5 text-base md:-ml-5 md:py-0 md:absolute">
            <a href="#_" class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Home</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_" class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Features</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_" class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Pricing</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
            <a href="#_" class="relative font-medium leading-6 text-gray-600 transition duration-150 ease-out hover:text-gray-900" x-data="{ hover: false }" @mouseenter="hover = true" @mouseleave="hover = false">
                <span class="block">Blog</span>
                <span class="absolute bottom-0 left-0 inline-block w-full h-0.5 -mb-1 overflow-hidden">
                    <span x-show="hover" class="absolute inset-0 inline-block w-full h-1 h-full transform bg-gray-900" x-transition:enter="transition ease duration-200" x-transition:enter-start="scale-0" x-transition:enter-end="scale-100" x-transition:leave="transition ease-out duration-300" x-transition:leave-start="scale-100" x-transition:leave-end="scale-0"></span>
                </span>
            </a>
        </nav>


        @if (Route::has('login'))
            <div class="relative z-10 inline-flex items-center space-x-3 md:ml-5 lg:justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-gray-600 whitespace-no-wrap
                                bg-white border border-gray-200 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:shadow-none"
                            data-rounded="rounded-md">
                            Dashboard
                    </a>
                    @else
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap
                                    bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
                            data-rounded="rounded-md"
                            data-primary="blue-600">
                            Log In
                        </a>
                    </span>
                    @if (Route::has('register'))
                    <span class="inline-flex rounded-md shadow-sm">
                        <a href="{{ route('register') }}" class="inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap
                                            bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" data-rounded="rounded-md" data-primary="blue-600">
                            Sign Up
                        </a>
                    </span>
                    @endif
                @endauth
            </div>
        @endif
    </div>
</section>
<section class="py-20 bg-white">
    <div class="container max-w-6xl mx-auto">
        <h2 class="text-4xl font-bold tracking-tight text-center">Our Features</h2>
        <p class="mt-2 text-lg text-center text-gray-600">Check out our list of awesome features below.</p>
        <div class="grid grid-cols-4 gap-8 mt-10 sm:grid-cols-8 lg:grid-cols-12 sm:px-8 xl:px-0">

            <div class="relative flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 overflow-hidden bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M14 3v4a1 1 0 0 0 1 1h4"></path><path d="M5 8v-3a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2h-5"></path><circle cx="6" cy="14" r="3"></circle><path d="M4.5 17l-1.5 5l3 -1.5l3 1.5l-1.5 -5"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Certifications</h4>
                <p class="text-base text-center text-gray-500">Each of our plan will provide you and your team with certifications.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M18 8a3 3 0 0 1 0 6"></path><path d="M10 8v11a1 1 0 0 1 -1 1h-1a1 1 0 0 1 -1 -1v-5"></path><path d="M12 8h0l4.524 -3.77a0.9 .9 0 0 1 1.476 .692v12.156a0.9 .9 0 0 1 -1.476 .692l-4.524 -3.77h-8a1 1 0 0 1 -1 -1v-4a1 1 0 0 1 1 -1h8"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Notifications</h4>
                <p class="text-base text-center text-gray-500">Send out notifications to all your customers to keep them engaged.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><polyline points="12 3 20 7.5 20 16.5 12 21 4 16.5 4 7.5 12 3"></polyline><line x1="12" y1="12" x2="20" y2="7.5"></line><line x1="12" y1="12" x2="12" y2="21"></line><line x1="12" y1="12" x2="4" y2="7.5"></line><line x1="16" y1="5.25" x2="8" y2="9.75"></line></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Bundles</h4>
                <p class="text-base text-center text-gray-500">High-quality bundles of awesome tools to help you out.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M8 9l3 3l-3 3"></path><line x1="13" y1="15" x2="16" y2="15"></line><rect x="3" y="4" width="18" height="16" rx="2"></rect></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Developer Tools</h4>
                <p class="text-base text-center text-gray-500">Developer tools to help grow your application and keep it up-to-date.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="9.5" y1="11" x2="9.51" y2="11"></line><line x1="14.5" y1="11" x2="14.51" y2="11"></line><path d="M9.5 15a3.5 3.5 0 0 0 5 0"></path><path d="M7 5h1v-2h8v2h1a3 3 0 0 1 3 3v9a3 3 0 0 1 -3 3v1h-10v-1a3 3 0 0 1 -3 -3v-9a3 3 0 0 1 3 -3"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Building Blocks</h4>
                <p class="text-base text-center text-gray-500">The right kind of building blocks to take your company to the next level.</p>
            </div>

            <div class="flex flex-col items-center justify-between col-span-4 px-8 py-12 space-y-4 bg-gray-100 sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
                <div class="p-3 text-white bg-blue-500 rounded-full" data-primary="blue-500" data-rounded="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-8 " viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><line x1="15" y1="5" x2="15" y2="7"></line><line x1="15" y1="11" x2="15" y2="13"></line><line x1="15" y1="17" x2="15" y2="19"></line><path d="M5 5h14a2 2 0 0 1 2 2v3a2 2 0 0 0 0 4v3a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-3a2 2 0 0 0 0 -4v-3a2 2 0 0 1 2 -2"></path></svg>
                </div>
                <h4 class="text-xl font-medium text-gray-700">Coupons</h4>
                <p class="text-base text-center text-gray-500">Coupons system to provide special offers and discounts for your app.</p>
            </div>

        </div>
    </div>

</section>



<!--
Include Tailwind JIT CDN compiler
More info: https://beyondco.de/blog/tailwind-jit-compiler-via-cdn
-->
<script src="https://unpkg.com/tailwindcss-jit-cdn"></script>

<!-- Snippet -->
<section class="flex flex-col justify-center antialiased bg-gray-900 text-gray-200 min-h-screen">
    <div class="max-w-6xl mx-auto p-4 sm:px-6 h-full">
        <!-- Blog post -->
        <article class="max-w-sm mx-auto md:max-w-none grid md:grid-cols-2 gap-6 md:gap-8 lg:gap-12 xl:gap-16 items-center">
            <a class="relative block group" href="#0">
                <div class="absolute inset-0 bg-gray-800 hidden md:block transform md:translate-y-2 md:translate-x-4 xl:translate-y-4 xl:translate-x-8 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out pointer-events-none" aria-hidden="true"></div>
                <figure class="relative h-0 pb-[56.25%] md:pb-[75%] lg:pb-[56.25%] overflow-hidden transform md:-translate-y-2 xl:-translate-y-4 group-hover:translate-x-0 group-hover:translate-y-0 transition duration-700 ease-out">
                    <img class="absolute inset-0 w-full h-full object-cover transform hover:scale-105 transition duration-700 ease-out" src="https://preview.cruip.com/open-pro/images/blog-post-01.jpg" width="540" height="303" alt="Blog post">
                </figure>
            </a>
            <div>
                <header>
                    <div class="mb-3">
                        <ul class="flex flex-wrap text-xs font-medium -m-1">
                            <li class="m-1">
                                <a class="inline-flex text-center text-gray-100 py-1 px-3 rounded-full bg-purple-600 hover:bg-purple-700 transition duration-150 ease-in-out" href="#0">Product</a>
                            </li>
                            <li class="m-1">
                                <a class="inline-flex text-center text-gray-100 py-1 px-3 rounded-full bg-blue-500 hover:bg-blue-600 transition duration-150 ease-in-out" href="#0">Engineering</a>
                            </li>
                        </ul>
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-bold leading-tight mb-2">
                        <a class="hover:text-gray-100 transition duration-150 ease-in-out" href="#0">Designing a functional workflow at home.</a>
                    </h3>
                </header>
                <p class="text-lg text-gray-400 flex-grow">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat.</p>
                <footer class="flex items-center mt-4">
                    <a href="#0">
                        <img class="rounded-full flex-shrink-0 mr-4" src="https://preview.cruip.com/open-pro/images/news-author-04.jpg" width="40" height="40" alt="Author 04">
                    </a>
                    <div>
                        <a class="font-medium text-gray-200 hover:text-gray-100 transition duration-150 ease-in-out" href="#0">Chris Solerieu</a>
                        <span class="text-gray-700"> - </span>
                        <span class="text-gray-500">Jan 19, 2020</span>
                    </div>
                </footer>
            </div>
        </article>
    </div>
</section>

<!-- More components -->
<div x-show="open" class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60" x-data="{ open: true }">
    <div class="bg-gray-800 text-gray-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
        <div>👉 <a class="hover:underline ml-1" href="https://github.com/AiFxApp" target="_blank">View Us on Github</a></div>
        <button class="text-gray-500 hover:text-gray-400 ml-5" @click="open = false">
            <span class="sr-only">Close</span>
            <svg class="w-4 h-4 flex-shrink-0 fill-current" viewBox="0 0 16 16">
                <path d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z" />
            </svg>
        </button>
    </div>
</div>


<section class="py-20 bg-white">
    <div class="px-4 mx-auto text-center max-w-7xl sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl md:text-5xl xl:text-6xl">
            The New Standard for Design
        </h2>
        <p class="max-w-md mx-auto mt-3 text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
            Use our award-winning tools to help you maximize your profits. We've uncovered the correct recipe for converting visitors into customers.
        </p>
        <div class="flex justify-center mt-8 space-x-3">
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow hover:bg-indigo-700" data-primary="indigo-600" data-rounded="rounded-md">Sign Up Today</a>
            <a href="#" class="inline-flex items-center justify-center px-5 py-3 text-base font-medium text-indigo-700 bg-indigo-100 border border-transparent rounded-md hover:bg-indigo-200" data-primary="indigo-600" data-rounded="rounded-md">Learn more</a>
        </div>
    </div>
</section>

<section class="bg-white">
    <div class="w-full px-5 py-6 mx-auto space-y-5 sm:py-8 md:py-12 sm:space-y-8 md:space-y-16 max-w-7xl">

        <div class="flex flex-col items-center sm:px-5 md:flex-row">
            <div class="w-full md:w-1/2">
                <a href="#_" class="block">
                    <img class="object-cover w-full h-full rounded-lg max-h-64 sm:max-h-96" src="https://cdn.devdojo.com/images/may2021/cupcakes.jpg">
                </a>
            </div>
            <div class="flex flex-col items-start justify-center w-full h-full py-6 mb-6 md:mb-0 md:w-1/2">
                <div class="flex flex-col items-start justify-center h-full space-y-3 transform md:pl-10 lg:pl-16 md:space-y-5">
                    <div class="bg-pink-500 flex items-center pl-2 pr-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                        <svg class="w-3.5 h-3.5 mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        <span>Featured</span>
                    </div>
                    <h1 class="text-4xl font-bold leading-none lg:text-5xl xl:text-6xl"><a href="#_">Savory Templates. Sweet Designs.</a></h1>
                    <p class="pt-2 text-sm font-medium">by <a href="#_" class="mr-1 underline">John Doe</a> · <span class="mx-1">April 23rd, 2021</span> · <span class="mx-1 text-gray-600">5 min. read</span></p>
                </div>
            </div>
        </div>

        <div class="flex grid grid-cols-12 pb-10 sm:px-5 gap-x-8 gap-y-16">
            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/fruit.jpg">
                </a>
                <div class="bg-purple-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Lifestyle</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl"><a href="#_">Creating a Future Worth Living</a></h2>
                <p class="text-sm text-gray-500">Learn the attributes you need to gain in order to build a future and create a life that you are truly happy with.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mary Jane</a> · <span class="mx-1">April 17, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/workout.jpg">
                </a>
                <div class="bg-pink-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Health</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Healther Version of Yourself</h2>
                <p class="text-sm text-gray-500">If you want to excel in life and become a better version of yourself, you'll need to upgrade your life.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Fred Jones</a> · <span class="mx-1">April 10, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg shadow-sm max-h-56" src="https://cdn.devdojo.com/images/may2021/food.jpg">
                </a>
                <div class="bg-red-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Food</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Enjoy the Meals of the Kings</h2>
                <p class="text-sm text-gray-500">Take the time to enjoy the life that you've created. It's totally fine to live like kings and eat like royalty.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Mike Roberts</a> · <span class="mx-1">April 6, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/books.jpg">
                </a>
                <div class="bg-blue-500 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Motivation</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Writing for Success</h2>
                <p class="text-sm text-gray-500">Writing about your plans for success is extremely helpful for yourself and it will allow you to share your story.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Tom Johnson</a> · <span class="mx-1">May 25, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/clock.jpg">
                </a>
                <div class="bg-gray-800 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Business</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">Simple Time Management</h2>
                <p class="text-sm text-gray-500">Managing your time can make the difference between getting ahead in life or staying exactly where you are.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Scott Reedman</a> · <span class="mx-1">May 18, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

            <div class="flex flex-col items-start col-span-12 space-y-3 sm:col-span-6 xl:col-span-4">
                <a href="#_" class="block">
                    <img class="object-cover w-full mb-2 overflow-hidden rounded-lg max-h-56" src="https://cdn.devdojo.com/images/may2021/lemons.jpg">
                </a>
                <div class="bg-yellow-400 flex items-center px-3 py-1.5 leading-none rounded-full text-xs font-medium uppercase text-white inline-block">
                    <span>Nutrition</span>
                </div>
                <h2 class="text-lg font-bold sm:text-xl md:text-2xl">The Fruits Life</h2>
                <p class="text-sm text-gray-500">Take a moment and enjoy to enjoy the many fruits of life. Relaxation and a healthy diet can go a long way.</p>
                <p class="pt-2 text-xs font-medium"><a href="#_" class="mr-1 underline">Jake Caldwell</a> · <span class="mx-1">May 15, 2021</span> · <span class="mx-1 text-gray-600">3 min. read</span></p>
            </div>

        </div>
    </div>
</section>

<section class="w-full bg-white">
    <div class="mx-auto max-w-7xl">
        <div class="flex flex-col lg:flex-row">
            <div class="relative w-full bg-cover lg:w-6/12 xl:w-7/12 bg-gradient-to-r from-white via-white to-gray-100">
                <div class="relative flex flex-col items-center justify-center w-full h-full px-10 my-20 lg:px-16 lg:my-0">
                    <div class="flex flex-col items-start space-y-8 tracking-tight lg:max-w-3xl">
                        <div class="relative">
                            <p class="mb-2 font-medium text-gray-700 uppercase">Work smarter</p>
                            <h2 class="text-5xl font-bold text-gray-900 xl:text-6xl">Features to help you work smarter</h2>
                        </div>
                        <p class="text-2xl text-gray-700">We've created a simple formula to follow in order to gain more out of your business and your application.</p>
                        <a href="#_" class="inline-block px-8 py-5 text-xl font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease" data-primary="blue-600" data-rounded="rounded-lg">Get Started Today</a>
                    </div>
                </div>
            </div>

            <div class="w-full bg-white lg:w-6/12 xl:w-5/12">
                <div class="flex flex-col items-start justify-start w-full h-full p-10 lg:p-16 xl:p-24">
                    <h4 class="w-full text-3xl font-bold">Signup</h4>
                    <p class="text-lg text-gray-500">or, if you have an account you can <a href="#_" class="text-blue-600 underline" data-primary="blue-600">sign in</a></p>
                    <div class="relative w-full mt-10 space-y-8">
                        <div class="relative">
                            <label class="font-medium text-gray-900">Name</label>
                            <input type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" data-primary="blue-600" data-rounded="rounded-lg" placeholder="Enter Your Name" />
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Email</label>
                            <input type="text" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" data-primary="blue-600" data-rounded="rounded-lg" placeholder="Enter Your Email Address" />
                        </div>
                        <div class="relative">
                            <label class="font-medium text-gray-900">Password</label>
                            <input type="password" class="block w-full px-4 py-4 mt-2 text-xl placeholder-gray-400 bg-gray-200 rounded-lg focus:outline-none focus:ring-4 focus:ring-blue-600 focus:ring-opacity-50" data-primary="blue-600" data-rounded="rounded-lg" placeholder="Password" />
                        </div>
                        <div class="relative">
                            <a href="#_" class="inline-block w-full px-5 py-4 text-lg font-medium text-center text-white transition duration-200 bg-blue-600 rounded-lg hover:bg-blue-700 ease" data-primary="blue-600" data-rounded="rounded-lg">Create Account</a>
                            <a href="#_" class="inline-block w-full px-5 py-4 mt-3 text-lg font-bold text-center text-gray-900 transition duration-200 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 ease" data-rounded="rounded-lg">Sign up with Google</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="h-auto bg-white">
    <div class="max-w-7xl mx-auto py-16 px-10 sm:py-24 sm:px-6 lg:px-8 sm:text-center">
        <h2 class="text-base font-semibold text-indigo-600 tracking-wide uppercase">subtitle text</h2>
        <p class="mt-1 text-4xl font-extrabold text-gray-900 sm:text-5xl sm:tracking-tight lg:text-6xl">Build your next great idea</p>
        <p class="max-w-3xl mt-5 mx-auto text-xl text-gray-500 tails-relative">Are you ready to start building the next great idea. You can start off by using our design components to help tell you story and showcase your great idea.</p><div class="tails-hover-element">p</div><p></p>
    </div>
</section><section class="px-2 py-32 bg-white md:px-0 tails-relative">
  <div class="container items-center max-w-6xl px-8 mx-auto xl:px-5">
    <div class="flex flex-wrap items-center sm:-mx-3">
      <div class="w-full md:w-1/2 md:px-3">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Beautiful Pages to</span>
            <span class="block text-indigo-600 xl:inline" data-primary="indigo-600">Tell Your Story!</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">It's never been easier to build beautiful websites that convey your message and tell your story.</p>
          <div class="relative flex flex-col sm:flex-row sm:space-x-4">
            <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto" data-primary="indigo-600" data-rounded="rounded-md">
              Try It Free
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="#_" class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600" data-rounded="rounded-md">
              Learn More
            </a>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
        <div class="w-full h-auto overflow-hidden rounded-md shadow-xl sm:rounded-xl" data-rounded="rounded-xl" data-rounded-max="rounded-full">
            <img src="https://cdn.devdojo.com/images/november2020/hero-image.jpeg" class="">
          </div>
      </div>
    </div>
  </div>
</section>

<footer class="bg-white">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    About
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Blog
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Team
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Pricing
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Terms
                </a>
            </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                </svg>
            </a>
        </div>
        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            &copy; 2021 SomeCompany, Inc. All rights reserved.
        </p>
    </div>
    <section class="text-gray-700 bg-white body-font" >
    <div class="container flex flex-col items-center px-8 py-8 mx-auto max-w-7xl sm:flex-row">
        <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">tails<span class="text-indigo-600">.</span></a>
        <p class="mt-4 text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l sm:border-gray-200 sm:mt-0">&copy; 2021 Tails - Tailwindcss Page Builder
        </p>
        <span class="inline-flex justify-center mt-4 space-x-5 sm:ml-auto sm:mt-0 sm:justify-start">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">GitHub</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                </svg>
            </a>

            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Dribbble</span>
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z" clip-rule="evenodd" />
                </svg>
            </a>
        </span>
    </div>
</section>
</footer>


    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
