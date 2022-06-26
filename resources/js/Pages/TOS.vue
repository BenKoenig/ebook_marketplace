<template>
    <Guest>
        <Head title="Terms of Service" />

        <div class="component--padding">
            <Headline
            title="Read about our ToS!"
            h1="Terms of Service"
            description="Terms of service are the legal agreements between a service provider and a person who wants to use that service."
            class="component--paddingB"
            />

            <p class="text-red-600">(This is just a demo site)</p>
            <h1>Website Terms and Conditions of Use</h1>


            <h2>1. Terms</h2>

            <p>By accessing this Website, accessible from readme.de, you are agreeing to be bound by these Website Terms and Conditions of Use and agree that you are responsible for the agreement with any applicable local laws. If you disagree with any of these terms, you are prohibited from accessing this site. The materials contained in this Website are protected by copyright and trade mark law.</p>

            <h2>2. Use License</h2>

            <p>Permission is granted to temporarily download one copy of the materials on readme's Website for personal, non-commercial transitory viewing only. This is the grant of a license, not a transfer of title, and under this license you may not:</p>

            <ul>
                <li>modify or copy the materials;</li>
                <li>use the materials for any commercial purpose or for any public display;</li>
                <li>attempt to reverse engineer any software contained on readme's Website;</li>
                <li>remove any copyright or other proprietary notations from the materials; or</li>
                <li>transferring the materials to another person or "mirror" the materials on any other server.</li>
            </ul>

            <p>This will let readme to terminate upon violations of any of these restrictions. Upon termination, your viewing right will also be terminated and you should destroy any downloaded materials in your possession whether it is printed or electronic format. These Terms of Service has been created with the help of the <a href="https://www.termsofservicegenerator.net">Terms Of Service Generator</a>.</p>

            <h2>3. Disclaimer</h2>

            <p>All the materials on readme’s Website are provided "as is". readme makes no warranties, may it be expressed or implied, therefore negates all other warranties. Furthermore, readme does not make any representations concerning the accuracy or reliability of the use of the materials on its Website or otherwise relating to such materials or any sites linked to this Website.</p>

            <h2>4. Limitations</h2>

            <p>readme or its suppliers will not be hold accountable for any damages that will arise with the use or inability to use the materials on readme’s Website, even if readme or an authorize representative of this Website has been notified, orally or written, of the possibility of such damage. Some jurisdiction does not allow limitations on implied warranties or limitations of liability for incidental damages, these limitations may not apply to you.</p>

            <h2>5. Revisions and Errata</h2>

            <p>The materials appearing on readme’s Website may include technical, typographical, or photographic errors. readme will not promise that any of the materials in this Website are accurate, complete, or current. readme may change the materials contained on its Website at any time without notice. readme does not make any commitment to update the materials.</p>

            <h2>6. Links</h2>

            <p>readme has not reviewed all of the sites linked to its Website and is not responsible for the contents of any such linked site. The presence of any link does not imply endorsement by readme of the site. The use of any linked website is at the user’s own risk.</p>

            <h2>7. Site Terms of Use Modifications</h2>

            <p>readme may revise these Terms of Use for its Website at any time without prior notice. By using this Website, you are agreeing to be bound by the current version of these Terms and Conditions of Use.</p>

            <h2>8. Your Privacy</h2>

            <p>Please read our Privacy Policy.</p>

            <h2>9. Governing Law</h2>

            <p>Any claim related to readme's Website shall be governed by the laws of at without regards to its conflict of law provisions.</p>
        </div>
        
        
    </Guest>

</template>

<script setup>
import { Head } from "@inertiajs/inertia-vue3";
import Guest from "@/Layouts/Guest";
import Headline from "@/Shared/Headline";
</script>

<style scoped>
h1 {
    @apply text-2xl;
    @apply font-bold;
    @apply mb-3;
}

h2 {
    @apply text-xl;
    @apply font-bold;
    @apply mb-1;
}
</style>
