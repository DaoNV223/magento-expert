define([

], function () {
    'use strict';

    return {
        props: {
            msg: String
        },
        emits: ['response'],
        created() {
            this.$emit('response', 'hello from child')
        },
        template: `
        <h2>{{ msg || 'No props passed yet' }}</h2>
        <slot>Fallback content</slot>
        `
    }
});
