<template>
    <ul>
        <li v-for="value in field">
            {{value}}
        </li>
    </ul>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
