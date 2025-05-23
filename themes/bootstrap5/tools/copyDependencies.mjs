import { cp } from 'node:fs/promises';
import { copyFile } from 'node:fs/promises';

let buildDepsOnly = false;
process.argv.forEach(arg => {
    if (arg === '--only-build-deps') {
        buildDepsOnly = true;
    }
});

console.log('Copying dependencies...');

// Bootstrap 5
await cp('node_modules/bootstrap/scss/.', 'scss/vendor/bootstrap/', { recursive: true });

if (buildDepsOnly) {
    console.log('Done copying build dependencies.');
    process.exit();
}

await copyFile('node_modules/bootstrap/dist/js/bootstrap.min.js', 'js/vendor/bootstrap.min.js');

// Popper (Bootstrap 5 dependency)
await copyFile('node_modules/@popperjs/core/dist/umd/popper.min.js', 'js/vendor/popper.min.js');

// autocomplete.js
await copyFile('node_modules/autocomplete.js/autocomplete.js', 'js/vendor/autocomplete.js');

// chart.js
await copyFile('node_modules/chart.js/dist/chart.umd.js', 'js/vendor/chart.js');

// jQuery
await copyFile('node_modules/jquery/dist/jquery.min.js', 'js/vendor/jquery.min.js');

// nouislider
await copyFile('node_modules/nouislider/LICENSE.md', 'js/vendor/nouislider_LICENSE.md');
await copyFile('node_modules/nouislider/dist/nouislider.min.js', 'js/vendor/nouislider.min.js');
await copyFile('node_modules/nouislider/dist/nouislider.min.css', 'css/vendor/nouislider.min.css');

// simple-keyboard
await copyFile('node_modules/simple-keyboard/build/index.js', 'js/vendor/simple-keyboard/index.js');
await copyFile('node_modules/simple-keyboard/build/css/index.css', 'css/vendor/simple-keyboard/index.css');
await copyFile('node_modules/simple-keyboard-layouts/build/index.js', 'js/vendor/simple-keyboard-layouts/index.js');

// vanilla-cookieconsent
await copyFile('node_modules/vanilla-cookieconsent/dist/cookieconsent.umd.js', 'js/vendor/cookieconsent.umd.js');

console.log('Done copying dependencies.');
