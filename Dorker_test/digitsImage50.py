import sklearn.datasets
import matplotlib.pyplot as plt

digits = sklearn.datasets.load_diabetes()

for i in range(50):
    plt.subplot(5, 10, i + 1)
    plt.axis("off")
    plt.title(digits.target[i])
    plt.imshow(digits.images[i], cmap="Greys")
plt.show()