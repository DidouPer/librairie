rev=$(git rev-parse --short HEAD)
git config user.name "DidouPer"
git config user.password "Didsd2011"
git add .
git commit -m "committed at ${rev}"
git push origin HEAD:preprod
