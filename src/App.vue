<script setup lang="ts">
import NcAppContent from '@nextcloud/vue/components/NcAppContent'
import NcContent from '@nextcloud/vue/components/NcContent'
</script>

<template>
	<NcContent app-name="remarkableconnector">
		<NcAppContent :class="$style.content">
			<h2>reMarkable Connector</h2>
			<p>Sync your reMarkable documents with Nextcloud</p>
		</NcAppContent>
	</NcContent>
</template>

<style module>
.content {
	display: flex;
	justify-content: center;
	margin: 16px;
}
</style>
