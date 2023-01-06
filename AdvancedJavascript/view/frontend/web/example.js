define([], function () {
    alert('The module load only once');
    let mageJsComponent = function (config, node) {
        alert("Look in your browser's console");
        console.log(config);
        console.log(node);
    };

    return mageJsComponent;
});
