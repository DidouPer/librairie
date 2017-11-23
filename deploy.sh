rev=$(git rev-parse --short HEAD)
git config user.name "jhocre"
git config user.password "Jhorhcp091427"
git add .
git commit -m "committed at ${rev}"
git push origin HEAD:master
