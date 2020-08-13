<template>
    <div>
        Old
        <ul>
            <li v-for="value in field.value.old">
                {{value}}
            </li>
        </ul>
        New
        <ul>
            <li v-for="value in field.value.attributes">
                {{value}}
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
}
</script>
