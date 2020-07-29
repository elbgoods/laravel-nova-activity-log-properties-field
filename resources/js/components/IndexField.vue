<template>
    <div>
        <span v-for="change in changes">
            {{change}}
        </span>
    </div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],
    computed: {
        changes() {
            const changes = []

            if (!this.field.value.old) {
                return [this.field.createdText || 'Model created']
            }

            if (!this.field.value.attributes) {
                return [this.field.deletedText || 'Model deleted']
            }

            Object.keys(this.field.value.attributes).forEach((key) => {
                if (this.field.value.attributes[key] !== this.field.value.old[key]) {
                    changes.push(
                        this.makeFieldOutput(
                            key,
                            this.field.value.old[key],
                            this.field.value.attributes[key]
                        )
                    )
                }
            })

            return changes
        }
    },
    methods: {
        makeFieldOutput(key, oldValue, newValue) {
            if (key === 'password') {
                return 'Password Changed'
            }

            return key + ': ' + oldValue + ' -> ' + newValue
        }
    }
}
</script>
